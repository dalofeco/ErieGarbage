<?php
require_once 'classes/view/View.php';

class ErrorView extends View {
    
    private $message = '<div class="content-home"><div class="content-row">                                                     <h1>Well this is awkward... an error has occured. :( <br>
                            We will be working to fix this soon!</h1>
                        </div></div>';
    
    protected function printUserBody() {
        echo $this->message;
    }
    
    protected function printAdminBody() {
        echo $this->message;
    }
    
    protected function printUnauthenticatedBody() {
        echo $this->message;
    }
    
    protected function printUnauthenticatedHeader() {
        echo Header::LOGGED_OUT;
    }
}

$errorView = new ErrorView();
$errorView->renderPage();
?>
