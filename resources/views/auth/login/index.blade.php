<!DOCTYPE html>
<html lang="en">
    @include('.assets.client.head')
    <style>
        .bg-image-vertical {
            position: relative;
            overflow: hidden;
            background-repeat: no-repeat;
            background-position: right center;
            background-size: auto 100%;
        }

        @media (min-width: 1025px) {
            .h-custom-2 {
            height: 100%;
            }
        }
    </style>
<body>
    <div class="container">
        @include('.auth.login.login-form')
    </div>
</body>
</html>