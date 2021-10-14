var ts;

function display_ct(timestamp) {
    ts = timestamp;
    run_ct();
}

function run_ct() {
    x = new Date(ts) ;

    var year=x.getFullYear();
    var month=x.getMonth()+1;
    var day=x.getDate();
    var hour=x.getHours();
    var minute=x.getMinutes();
    var second=x.getSeconds();
    if (month <10 ){month='0' + month;}
    if (day <10 ){day='0' + day;}
    if(hour <10 ){hour='0'+hour;}
    if(minute <10 ) {minute='0' + minute; }
    if(second<10){second='0' + second;}

    var x3 = year+'-'+month+'-'+day+ ' ' +  hour+':'+minute+':'+second

    document.getElementById('ct').value = x3;
    var refresh=1000; // Refresh rate in milli seconds
    setTimeout('run_ct()',refresh);

    ts = ts + 1000;
}