# nse-bhavcopy-in-php
fetch and store nse india bhavcopy data in mysql using php<br>
You can use this code free of cost without any warrenty.<br>
This script fetch bhavcopy data form NSE INDIA and store data in mysql then generate buy / sell signal for short trem long position.<br>
Donwload all file and upload pubilc_html folder<br>
Modify connect.php with your database details.<br>
Import ishwakbi_bhavcopy.sql in database.<br>
Run cron every 24 hours for bhavcopy.php<br>
Run cron every 5 minutes for candle.php<br>
View signal.php for buy / sell signal.<br>

<b>NOTE: Add your favorite stock name in sma table.<br>This script last tested on 17-04-2021.
