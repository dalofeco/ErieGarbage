<?php
require_once 'classes/view/View.php';

class AboutView extends View {
    private $message = '<div class="content-home"><div class="content-row">
                            <p>We are there to pick up your left overs!</p>
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

$aboutView = new AboutView();
$aboutView->renderPage();
?>
