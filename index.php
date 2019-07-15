<!DOCTYPE HTML>
<html>
    <head>
        <title>The document</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
        </style>
    </head>
    <body>
<p>This is some text.</p>

<div style="background-color:lightblue">
  <h3>This is a heading in a div element</h3>
  <p>This is some text in a div element.</p>
</div>

<p>This is some text.</p>
        <button id="cmd">generate PDF</button>
        
    </body>
</html>
<script>
//I did not read up on formatting as in pdf.text(X1, X2,   <------ not sure of how X1 and X2 are used, you can do that
$('#cmd').click(function () {
  let doc = new jsPDF('p','pt','a4');
doc.addHTML(document.body,function() {
    doc.save('html.pdf');
});

});    
</script>
