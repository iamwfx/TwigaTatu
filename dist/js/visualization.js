// Format Chart area
var ele = document.getElementById("chart-area");


var margin = {top: 30, right: -10, bottom: 20, left: 25},
    width = ele.offsetWidth  - margin.left - margin.right,
    height = screen.height/2 - margin.top - margin.bottom;

var selectStop = document.getElementById('selector');
selectStop.onchange = function stopSelector() {
                          var stop = document.getElementById("selector").value;
                          // console.log(stop);
                          $("#svgid").empty();
                          updateData();
                          
                      };
showData()


// var formatTime = d3.time.format("%I:%M:%S %p");
var formatTime = d3.time.format("%m-%d-%Y %I:%M %p");
// var formatTime = d3.time.format("%x %x");

var formatHour = d3.time.format("%I %p");

var x = d3.time.scale()
  // .domain([0,10])
    .range([0, width-40]);

var y = d3.scale.linear()
    .range([height, 0]);

var xAxis = d3.svg.axis()
    .scale(x)
    .orient("bottom")
    .ticks(7);

var yAxis = d3.svg.axis()
    .scale(y)
    .orient("left");

var line = d3.svg.line()
    // .interpolate("basis")
    .interpolate("basis") 
    .x(function(d) { return x(d.DateTime); })
    .y(function(d) { return y(d.Cost); });

var dispAvg = d3.select("#chart-area")
        .append("h3")
        .attr("width", width)
        .attr("height",30);


var svg = d3.select("#chart-area")
      .append("svg")
        .attr("width", width)
        .attr("height", height + margin.top + margin.bottom)
        .append("g")
        .attr("transform", "translate(" + margin.left + "," + margin.top + ")");


function showData() {
// Load CSV file
d3.csv("dist/data/dummydata.csv", function(data){
  data.forEach(function(d){

    d.DateTime = formatTime.parse(d.DateTime);
    d.Cost = +d.Cost; 
  });

  data.sort(sortByTimeAscending);

  var route = data.filter(function(d){

    if (d["rte_name"] == selectStop.value){
    console.log(selectStop.value);
    return d;
    };
  });

  var avgCost =d3.mean(route,function(d) { return +d.Cost});


  dispAvg.text("Average fare is "+d3.round(avgCost,0)+"KSH");

  x.domain(d3.extent(route, function(d) { return d.DateTime; }));
    y.domain(d3.extent(route, function(d) { return d.Cost; }));

    // Add axis and axis labels
    svg.append("g")
      .attr("class", "x axis")
      .attr("transform", "translate(0," + height + ")")
      .call(xAxis)
      .append("text")
      .attr("x", width-40)
      .attr("y", -10)
      .attr("dx", ".71em")
      .style("text-anchor", "end")
      .text("Time");
      // .tickFormat(function(d){
      //  return formatHour.parse(d.Time);
      // });


   svg.append("g")
      .attr("class", "y axis")
      .call(yAxis)
      .append("text")
      .attr("transform", "rotate(-90)")
      .attr("y", 10)
      .attr("dy", ".10em")
      .style("text-anchor", "end")
      .text("Price");
     
     svg.append("path")
      .datum(route)
      // .datum(data)
      .attr("class", "line")
      .attr("d", line);

});
};

function updateData(){

  d3.csv("dist/data/dummydata.csv", function(data){
  data.forEach(function(d){

    d.DateTime = formatTime.parse(d.DateTime);
    d.Cost = +d.Cost; 
    });

    data.sort(sortByTimeAscending);


    var route = data.filter(function(d){
      // if (d["rte_name"] == "UoN"){
      if (d["rte_name"] == selectStop.value){
      console.log(selectStop.value);
      return d;
      };
    });
    var avgCost =d3.mean(route,function(d) { return +d.Cost});


  dispAvg.text("Average fare is "+d3.round(avgCost,0)+"KSH");

    x.domain(d3.extent(route, function(d) { return d.DateTime; }));
      y.domain(d3.extent(route, function(d) { return d.Cost; }));


    // Make the changes
    
      svg.select(".line")   // change the line
          .datum(route)
        .transition()
          .duration(1050)
          .ease('poly', 2, 2)
        .attr("class", "line")
        .attr("d", line)  ;
      svg.select(".x.axis") // change the x axis
          .transition()
          .duration(1050)
          .ease('poly', 2, 2)
          .call(xAxis);
      svg.select(".y.axis") // change the y axis
          .transition()
          .duration(1050)
          .ease('back', 2, 2)
          .call(yAxis);


});
}

function sortByTimeAscending(a, b) {
    // Dates will be cast to numbers automagically:

    return d3.ascending(a.DateTime,b.DateTime);
    console.log(a.DateTime);
};


