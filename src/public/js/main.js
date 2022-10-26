// window.onload = function() {
//   var popup = document.getElementById('js-popup');
//   if(!popup) return;
//   popup.classList.add('is-show');

//   var blackBg = document.getElementById('js-black-bg');
//   var closeBtn = document.getElementById('js-close-btn');

//   closePopUp(blackBg);
//   closePopUp(closeBtn);

//   function closePopUp(elem) {
//     if(!elem) return;
//     elem.addEventListener('click', function() {
//       popup.classList.remove('is-show');
//     })
//   }
// }

var sample = document.getElementById('sample');
var fp = flatpickr(sample, {
    dateFormat: 'Y-n-j(l)' // フォーマットの変更
});

window.addEventListener('DOMContentLoaded', function(){
  /** jQueryの処理 */
  $(function () {
    $('#openModal').click(function(){
        $('#modalArea').fadeIn();
    });
    $('#closeModal , #modalBg').click(function(){
      $('#modalArea').fadeOut();
    });
  });
});

google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(drawChart);

// const url = '/api/getChartInfo.php'
//     const res = fetch(url)
//     const studyHour = res.json()
//     console.log(`${studyHour.one}`);

function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ["Element", "Density", { role: "style"} ],
    ["", 3, "#36C5F8" ],
    ["2", 4, "#36C5F8"],
    ["", 5, "#36C5F8"],
    ["4", 3, "#36C5F8"],
    ["", 0, "#36C5F8"],
    ["6", 0, "#36C5F8"],
    ["", 4, "#36C5F8"],
    ["8", 2, "#36C5F8"],
    ["", 2, "#36C5F8"],
    ["10", 8, "#36C5F8"],
    ["", 8, "#36C5F8"],
    ["12", 2, "#36C5F8"],
    ["", 2, "#36C5F8"],
    ["14", 1, "#36C5F8"],
    ["", 7, "#36C5F8"],
    ["16", 4, "#36C5F8"],
    ["", 4, "#36C5F8"],
    ["18", 3, "#36C5F8"],
    ["", 3, "#36C5F8"],
    ["20", 3, "#36C5F8"],
    ["", 2, "#36C5F8"],
    ["22", 2, "#36C5F8"],
    ["", 6, "#36C5F8"],
    ["24", 6, "#36C5F8"],
    ["", 2, "#36C5F8"],
    ["26", 2, "#36C5F8"],
    ["", 1, "#36C5F8"],
    ["28", 1, "#36C5F8"],
    ["", 1, "#36C5F8"],
    ["30", 7, "#36C5F8"],
    ["", 1, "#36C5F8"],
  ]);

  // 学習言語の円グラフ
  var data_learning_language = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['HTML',     30],
    ['CSS',      20,],
    ['JavaScript',  10],
    ['PHP', 5],
    ['Laravel',    5],
    ['SQL',    20],
    ['SHELL',   20],
    ['その他',    10]
  ]);

  // 学習コンテンツの円グラフ
  var data_learning_contents = google.visualization.arrayToDataTable([
    ['Task', 'Hours per Day'],
    ['N予備校',     30],
    ['ドットインストール',      30],
    ['課題',  40]
  ]);

  var view = new google.visualization.DataView(data);
  view.setColumns([0, 1,
                { calc: "stringify",
                  sourceColumn: 1,
                  type: "string",
                  role: "annotation" },
                2]);

  // 棒グラフのオプション
  var chart_bar_options = {
    width: 616,
    height: 364,
    bar: {groupWidth: "55%"},
    legend: { position: "none" },
    pieHole: 0.4,
    hAxis:{
      // baselineColor:'red',
      textStyle: {color: '#ABC6DA', fontName: 'Arial', fontSize: 13}, 
      gridlines: { color: '#ffffff', count: 0} 
    },
    // vAxis: { format: '#月', },
    vAxis:{
      // baselineColor:'red',
      textStyle: {color: '#ABC6DA', fontName: 'Arial', fontSize: 13　　}, 
      gridlines: { color: '#0000000', count: 0},
      title:"", format:"#.#h"
    }

  };
  // 円グラフのオプション
  var chart_circle_options = {
    width: 250,
    height: 250,
    bar: {groupWidth: "95%"},
    pieHole: 0.4,
    legend: {position: 'none'},
    slices: {
      0: { color: '#0A45EC' },
      1: { color: '#0F71BD' },
      2: { color: '#20BDDE' },
      3: { color: '#3CCEFE' },
      4: { color: '#B39FF2' },
      5: { color: '#6D46EC' },
      6: { color: '#4A17F0' },
      7: { color: '#3005C0' }
    },
    pieSliceBorderColor: 'none'
  };
  
  var chart_bar = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
  chart_bar.draw(view, chart_bar_options);

  var chart_learning_language = new google.visualization.PieChart(document.getElementById('donutchart_learning_language'));
  chart_learning_language.draw(data_learning_language, chart_circle_options);

  var chart_learning_contents = new google.visualization.PieChart(document.getElementById('donutchart_learning_contents'));
  chart_learning_contents.draw(data_learning_contents, chart_circle_options);
}

  var modal=document.getElementById("modalContents");
  var twitter=document.getElementById("twitter");
  var load=document.getElementById("load");
  var done=document.getElementById("done");
document.getElementById("twitter").addEventListener('click', function(event) {
  modal.classList.add("invisible");
  twitter.classList.add("invisible");
  load.style.display="block";
  event.preventDefault();
  if(document.getElementById('check').checked){
  window.open(
      "https://twitter.com/intent/tweet?text=" + encodeURIComponent(document.getElementById("content").value),
      null,
  )
  }
  setTimeout(()=>{
    load.style.display="none";
    done.style.display="block";
  },3300)
});



// [


//   {
//       "day": 23,
//       "time": 6
//   },
//   {
//       "day": 24,
//       "time": 2
//   },
//   {
//       "day": 25,
//       "time": 2
//   },
//   {
//       "day": 26,
//       "time": 1
//   },
//   {
//       "day": 27,
//       "time": 1
//   },
//   {
//       "day": 28,
//       "time": 1
//   },
//   {
//       "day": 29,
//       "time": 7
//   },
//   {
//       "day": 30,
//       "time": 8
//   }
// ]