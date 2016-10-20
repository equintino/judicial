<html>
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="jquery.countdown.js"></script>
    </head>
    <body>
        <span id="clock"></span>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#clock').countdown('2015/10/09 12:34:56', function(event) {
                    $(this).html(event.strftime('%D dias %H:%M:%S'));
                });
            });
        </script>
    </body>
</html>