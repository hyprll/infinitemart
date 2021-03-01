const Format = new FormatMoney();

$.ajax({
  url : `${BASE_URL_SERVER }/produk`,
  type : "GET",
  dataType : "JSON",
  success : function(result){
    const getTotalProduk = result.data
    let number = 1;

    getTotalProduk.map((value) =>{
      const BodyTable = document.querySelector("#TableOrder tbody");

      $(BodyTable).append(`<tr>
                              <td>${number++}</td>
                              <td>${value.nama_produk}</td>
                              <td>${Format.toRupiah(value.harga)}</td>
                          </tr>`)
                          
                        })
      $(document).ready(function () {
        $("#TableOrder").DataTable({
          paging: true,
          lengthChange: false,
          searching: true,
          ordering: true,
          info: true,
          autoWidth: false,
          responsive: true,
        });
      });
  }
})

if(document.getElementById("chartSold") != null && document.getElementById("chartSoldBar") != null){
  var options = {
    series: [{
    name: 'Dessert',
    type: 'column',
    data: [113, 101, 122, 117, 103, 112, 127, 111, 134, 112, 120]
  }, {
    name: 'Food',
    type: 'area',
    data: [144, 155, 141, 167, 152, 173, 201, 153, 162, 137, 143]
  }, {
    name: 'Drink',
    type: 'line',
    data: [130, 125, 136, 130, 145, 135, 164, 152, 159, 136, 139]
  }],
    chart: {
    height: 350,
    type: 'line',
    stacked: false,
  },
  stroke: {
    width: [0, 2, 5],
    curve: 'smooth'
  },
  plotOptions: {
    bar: {
      columnWidth: '50%'
    }
  },
  
  fill: {
    opacity: [0.85, 0.25, 1],
    gradient: {
      inverseColors: false,
      shade: 'light',
      type: "vertical",
      opacityFrom: 0.85,
      opacityTo: 0.55,
      stops: [0, 100, 100, 100]
    }
  },
  markers: {
    size: 0
  },
  xaxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Des'],
  },
  yaxis: {
    title: {
      text: 'Points',
    },
    min: 0
  },
  tooltip: {
    shared: true,
    intersect: false,
    y: {
      formatter: function (y) {
        if (typeof y !== "undefined") {
          return y.toFixed(0) + " Portions Sold";
        }
        return y;
  
      }
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#chartSold"), options);
  chart.render();

  var options = {
    series: [{
    data: [58, 55, 50, 49, 38, 34, 27, 24, 23, 20],
    name : "Total"
  }],
    chart: {
    type: 'bar',
    height: 350
  },
  plotOptions: {
    bar: {
      horizontal: true,
    }
  },
  dataLabels: {
    enabled: false
  },
  xaxis: {
    categories: [ 'Roasted Duck Colvert' ,'Chicken Saltimbocca', 'Cocktail', 'Panna Cotta', 'Bouillabasse', 'Roasted Scallop', 'Negroni',
      'Prinsesstårta', 'Semifreddo', 'Veal Sweetbread'
    ],
  },
  tooltip: {
    shared: true,
    intersect: false,
    y: {
      formatter: function (y) {
        if (typeof y !== "undefined") {
          return y.toFixed(0) + " Portions Sold";
        }
        return y;
  
      }
    }
  }
  };

  var chart = new ApexCharts(document.querySelector("#chartSoldBar"), options);
  chart.render();
}