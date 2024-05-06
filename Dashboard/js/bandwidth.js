const data = [
  {
    download: 0,
    upload: 0,
    label: "Start",
  },
];

var bandwidthChart = new Chart(document.getElementById("bandwidthchart"), {
  type: "line",
  data: {
    labels: data.map((d) => d.label),
    datasets: [
      {
        label: "Download(KBps)",
        data: data.map((d) => d.download),
        borderColor: "blue",
        borderWidth: 2,
        fill: true,
        cubicInterpolationMode: "monotone",
      },
      {
        label: "Upload(KBps)",
        data: data.map((d) => d.upload),
        borderColor: "red",
        borderWidth: 2,
        fill: true,
        cubicInterpolationMode: "monotone",
      },
    ],
  },
  options: {
    responsive: true,
    maintainAspectRatio: true,
    scales: {
      y: {
        beginAtZero: true,
        min: 0,
        max: 5120,
        title: {
          display: true,
          text: "Bandwidth (KBps)",
        },
      },
    },
    plugins: {
      legend: {
        display: true,
        position: "bottom",
      },
    },
  },
});

function addData(chart, label, newData) {
  chart.data.labels.push(label);
  chart.data.datasets[0].data.push(newData.download);
  chart.data.datasets[1].data.push(newData.upload);
  chart.update();
}

function removeFirstData(chart) {
  chart.data.labels.shift();
  chart.data.datasets.forEach((dataset) => {
    dataset.data.shift();
  });
  chart.update();
}

function getRealtimeBandwidth() {
  addData(bandwidthChart, "", {
    download: Math.floor(Math.random() * 1120),
    upload: Math.floor(Math.random() * 1120),
    label: "",
  });

  if (bandwidthChart.data.labels.length > 15) {
    removeFirstData(bandwidthChart);
  }
}

$(document).ready(function () {
  setInterval(getRealtimeBandwidth, 1000);
});
