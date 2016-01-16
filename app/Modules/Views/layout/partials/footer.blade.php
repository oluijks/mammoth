<?php
/**
 * Default footer.
 *
 * Copyright 2015 Mammoth. All rights reserved.
 * See LICENCE for license details.
 */
?>

<footer class="navbar navbar-footer navbar-fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="navbar-text footer-copyright">Copyright &copy; {{ date('Y') }} Mammoth</div>
            </div>
            <div class="col-md-6">
                <div class="navbar-text footer-made-with">
                    Made with <span class="hearts">&hearts;</span> by {!! mailto(config('mammoth.admin_email'), 'Olaf') !!}
                </div>
            </div>
        </div>
    </div>
</footer>

