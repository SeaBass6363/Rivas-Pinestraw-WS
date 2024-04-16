
let productCost = 0;
let b = 0;
document.getElementById("total").value = 0;

function makeDisable(option){
  if(option.value == "Top Soil"){
    document.getElementById("service").selectedIndex = 1;
    document.getElementById("service").disabled = true;
  }else{
    document.getElementById("service").disabled = false;
  }
}


function getTotal() {
  var selectProduct = document.getElementById("product").value;
  var selectService = document.getElementById("service").value;
  
  if (document.getElementById("product").value != '' && document.getElementById("quantity").value != '' && document.getElementById("service").value != '') {
    b = document.getElementById("quantity").value;
    switch (selectProduct) {
      case "Pinestraw":
        if(selectService=="Delivery"){
          productCost = "5.00";
        }else if(selectService=="Installation"){
          productCost = "7.50";
        }
        break;
      case "Black Mulch":
        if(selectService=="Delivery"){
          productCost = "4.00";
        }else if(selectService=="Installation"){
          productCost = "7.50";
        }
        break;
      case "Brown Mulch":
        if(selectService=="Delivery"){
          productCost = "4.00";
        }else if(selectService=="Installation"){
          productCost = "7.50";
        }
        break;
      case "Red Mulch":
        if(selectService=="Delivery"){
          productCost = "4.00";
        }else if(selectService=="Installation"){
          productCost = "7.50";
        }
        break;
      case "Top Soil":
        if(selectService=="Delivery"){
          productCost = "3.50";
        }
        break;
    }
    document.getElementById("total").value = productCost * b
    document.getElementById("total").value = parseFloat(document.getElementById("total").value).toFixed(2)
  } else {
    document.getElementById("total").value = 0.00;
  }
}
