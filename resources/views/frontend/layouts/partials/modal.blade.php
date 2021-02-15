
<!-- Success Modal Start -->
<div class="modal fade custom-modal" id="formSuccessModal" tabindex="-1" role="dialog" aria-labelledby="formSuccessModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header success">
                <h5 class="modal-title" id="formSuccessModalLabel">Success</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-popup-inner">
                    <div class="form-icon success">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                            <circle class="path circle" fill="none"  stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                            <polyline class="path check" fill="none" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 " />
                        </svg>
                    </div>
                    <div class="form-body">
                        <p>
                            Your message has been sent.We will contact you as soon as possible.
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="popup-btn success" data-dismiss="modal">Okay</a>
            </div>
        </div>
    </div>
</div>
<!-- Success Modal End -->

<!-- Danger Modal Start -->
<div class="modal fade custom-modal" id="formDangerModal" tabindex="-1" role="dialog" aria-labelledby="formDangerModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header danger">
                <h5 class="modal-title" id="formDangerModalLabel">Error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-popup-inner">
                    <div class="form-icon danger">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                            <circle class="path circle" fill="none" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1" />
                            <line class="path line" fill="none" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="34.4" y1="37.9" x2="95.8" y2="92.3" />
                            <line class="path line" fill="none" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" x1="95.8" y1="38" x2="34.4" y2="92.2" />
                        </svg>
                    </div>
                    <div class="form-body">
                        <p>
                            Error!Something went wrong.There was an error sending your message.
                            <span id="error_message"></span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <a href="javascript:void(0)" class="popup-btn danger" data-dismiss="modal">Close</a>
            </div>
        </div>
    </div>
</div>
<!-- Danger Modal End -->
