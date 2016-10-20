<html>
    <head>
        <link rel="stylesheet" href="flipclock.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="flipclock.js"></script>
    </head>
    <body>
        <div class="clock" style="margin:2em;"></div>

        <script type="text/javascript">
            $(document).ready(function() {
                var clock;

                clock = $('.clock').FlipClock({
                    clockFace: 'DailyCounter',
                    autoStart: false,
                    callbacks: {
                        stop: function() {
                            alert('Fim!')
                        }
                    }
                });

                clock.setTime(3600); // tempo em segundos
                clock.setCountdown(true);
                clock.start();
            });
        </script>
    </body>
</html>