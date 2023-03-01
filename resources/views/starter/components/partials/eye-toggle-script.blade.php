@section('footerScripts')
    <script>
        window.addEventListener('load', function() {
            // #region Password Eye Toggler

            const eyeToggleButton = document.getElementById('eye-toggle');

            if (eyeToggleButton) {
                const passwordInput = document.getElementById('password'),
                    eyeOpen = document.getElementById('eye-open'),
                    eyeClose = document.getElementById('eye-close');

                eyeToggleButton.addEventListener('click', function() {
                    console.log(passwordInput);

                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        eyeOpen.style.display = 'block';
                        eyeClose.style.display = 'none';
                    } else {
                        passwordInput.type = 'password';
                        eyeOpen.style.display = 'none';
                        eyeClose.style.display = 'block';

                    }
                });
            }

            // #endregion
        });
    </script>
@endsection()
