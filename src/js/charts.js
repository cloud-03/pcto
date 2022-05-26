
let date = new Date().getFullYear();

// Define Data
var data1 = [{
  x: xArray1,
  y: yArray1,
  type: "scatter"
}];

var data2 = [{
  x: xArray2,
  y: yArray2,
  type: "bar"
}];

// Define Layout
var layout1 = {
  title: "Resoconto annuale per giorno",
  yaxis: {
    title: "spazzatura in grammi",
  }
};

var layout2 = {
  title: "Resoconto mensile",
  yaxis: {
    title: "spazzatura in grammi"
  },
};

if(xArray1.length != 0 || yArray1.length != 0){
  Plotly.newPlot("LineGraph", data1, layout1);
}
else{
  document.getElementById("LineGraph").innerHTML = "Nessun dato disponibile";
}

if(xArray2.length != 0 || yArray2.length != 0){
  Plotly.newPlot("BarGraph", data2,  layout2);
}
else{
  document.getElementById("BarGraph").innerHTML = "Nessun dato disponibile";
}
