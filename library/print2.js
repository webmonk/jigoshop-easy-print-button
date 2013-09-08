function PrintDiv2() {    
           var divToPrint = document.getElementById('order_customer_shipping_data');
           var popupWin = window.open('', '_blank', 'width=450,height=500');
           popupWin.document.open();
           popupWin.document.write('<html><head>'+'<link rel="stylesheet" href="http://codemypain.com/print.css">'+'</head><body onload="window.print()"><div id="main">' + divToPrint.innerHTML + '</div></body></html>');
            popupWin.document.close();
}
