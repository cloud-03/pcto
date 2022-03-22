<script src="plotly-latest.min.js"></script>

var data = {
    x:[],
    y:[],
    type: 'bar',
    name: 'instance'
        // marker: { color:'pink', },			// this will change the color of the bar to pink from the default blue.
  };

  var layout = {
        x:[],
        // y: [],								// If you use y rather than x, and also change your php->javascript code, this will make it horizontal.
    type: 'histogram',
    name: 'instance2'
};

Plotly.newPlot("myPlot", data, layout);