<?php

namespace App\Http\Controllers\Admin\Loan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PersonalLoneController extends Controller
{
    public function personalLoan()
    {
        return view('personal-loan');
    }

    public function calculate(Request $request) {

        $request->validate([
            'loan_amount'   => 'required|numeric',
            'interest_rate' => 'required|numeric',
            'loan_term'     => 'required|numeric',

        ]);

        $loanAmount = $request->input('loan_amount');
        $interestRate = $request->input('interest_rate');
        $loanTermYears = $request->input('loan_term');
        $startDate = Carbon::parse($request->input('start_date'));

        // Convert annual interest rate to a monthly interest rate
        $monthlyInterestRate = $interestRate / 100 / 12;

        // Convert loan term from years to months
        $loanTermMonths = $loanTermYears * 12;

        // Calculate the monthly payment using the amortization formula
        $monthlyPayment = ($loanAmount * $monthlyInterestRate) /
                          (1 - pow(1 + $monthlyInterestRate, -$loanTermMonths));

        // Generate amortization schedule and calculate total interest
        $amortizationSchedule = [];
        $remainingBalance = $loanAmount;
        $totalInterest = 0;

        for ($i = 1; $i <= $loanTermMonths; $i++) {
            // Interest for the current month
            $interestPayment = $remainingBalance * $monthlyInterestRate;

            // Principal payment for the current month
            $principalPayment = $monthlyPayment - $interestPayment;

            // Update remaining balance
            $remainingBalance -= $principalPayment;

              // Add interest for this month to total interest
            $totalInterest += $interestPayment;
            // Add this month to the amortization schedule

            $paymentDate = $startDate->copy()->addMonths($i - 1)->format('M Y');
            $amortizationSchedule[] = [
                'payment_date' => $paymentDate,
                'monthly_payment' => number_format($monthlyPayment, 2),
                'principal' => number_format($principalPayment, 2),
                'interest' => number_format($interestPayment, 2),
                'totalInterest' => number_format($totalInterest, 2),
                'remaining_balance' => number_format(max($remainingBalance, 0), 2),
            ];



        }

         // Calculate payoff date by adding the loan term in months to the start date
         $payoffDate = $startDate->addMonths($loanTermMonths)->format('F Y');

        // Return the calculated values and the amortization schedule to the view
        return view('personal-loan-view', [
            'monthlyPayment' => number_format($monthlyPayment, 2),
            'amortizationSchedule' => $amortizationSchedule,
            'loanAmount' => $loanAmount,
            'interestRate' => $interestRate,
            'loanTermYears' => $loanTermYears,
            'totalInterest' => number_format($totalInterest, 2),
            'startDate' => $startDate->format('F d, Y'),
            'payoffDate' => $payoffDate,  // Pass payoff date to the view
        ]);
    }
}
