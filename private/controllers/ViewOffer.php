<?php

class ViewOffer extends Controller{
    function index(){
        
        if(!Authentication::logged_in()){
            $this->redirect('login');
        }

        $investor = new Investor();
        $loan = new Loan();
        $request = new Request();

        $loanData = $loan->where('loan_id', $_GET['id']);
        $loanData = $loanData[0];

        $invData = $investor->where('inv_uid', $loanData->inv_uid);
        $invData = $invData[0];

        $reqData = $request->where('req_id', $loanData->req_id);
        $reqData = $reqData[0];

        if (!isset($_SESSION['offerDecision'])){
            $offerDecision = 'No offer was accepted nor declined';
        }
        else {
            $offerDecision = $_SESSION['offerDecision'];
            if ($offerDecision == 'accepted'){
                //
                $modLoan['loan_status'] = 'approved';
                $modRequest['is_approved'] = true;
                $request->update_request($reqData->req_id, $modRequest);
            }
            else if ($offerDecision == 'declined'){
                //
                $modLoan['loan_status'] = 'rejected';
            }

            $loan->update_loan($loanData->loan_id, $modLoan);
            unset($_SESSION['offerDecision']);
            $_SESSION['Toast'] = 'Offer was '.$offerDecision;
            $this->redirect('CustomerDashboard');
        }

        $this->view('loan/offer', ['loan' => $loanData, 'investor' => $invData]);
    }
}