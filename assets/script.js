function quantity_change() {
    var n = document.getElementById("quantity");
    n = parseInt(n.value);
    var price = document.getElementById("price");
    var val = parseInt(price.value);
    var final = val*n;
    var name= document.getElementById("name").value;
    document.getElementById('total').innerHTML = "<br>"+ name+ "<br>" +"Rs "+ final;
}