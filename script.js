document.addEventListener("DOMContentLoaded", function () {
  const mapObject = document.getElementById("map");
  const svgDoc = mapObject.contentDocument;
  const tooltip = document.getElementById("tooltip");

  // Function to fetch data from the database
  async function fetchData() {
    try {
      const response = await fetch("./get_districts.php");
      const data = await response.json();
      console.log(data);
      updateMapColors(data);
    } catch (error) {
      console.error("Error fetching data:", error);
    }
  }

  // Function to update the colors of the map districts
  function updateMapColors(data) {
    const colors = Array.from({ length: 1000 }, (_, index) => ({
      value: index,
      color: index === 0 ? "#141414" : "#ffea00",
    }));

    data.forEach((district) => {
      let districtShape = svgDoc.getElementById(district.id);
      if (!districtShape) {
        const districtName = district.name.toLowerCase().replace(/\s/g, "-");
        districtShape = svgDoc.getElementById(districtName);
      }

      if (districtShape) {
        const colorObj = colors.find(
          (colorData) => colorData.value === parseInt(district.value)
        );
        const color = colorObj ? colorObj.color : colors[0].color;

        districtShape.style.fill = color;
      }
    });
  }

  // Add event listeners for hover and mousemove on each district
  mapObject.addEventListener("mouseover", function (event) {
    const district = event.target;
    tooltip.textContent = `${district.getAttribute(
      "data-name"
    )}: ${district.getAttribute("data-value")}`;
    tooltip.style.display = "block";
    tooltip.style.left = event.pageX + 10 + "px";
    tooltip.style.top = event.pageY + 10 + "px";
  });

  mapObject.addEventListener("mousemove", function (event) {
    tooltip.style.left = event.pageX + 10 + "px";
    tooltip.style.top = event.pageY + 10 + "px";
  });

  mapObject.addEventListener("mouseout", function () {
    tooltip.style.display = "none";
  });

  fetchData();
  setInterval(fetchData, 60000); // 1 minute interval (60000 milliseconds)
});
