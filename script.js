document.addEventListener("DOMContentLoaded", function () {
  // Function to fetch data from the database
  function fetchData() {
    // Replace 'your_php_script_url' with the actual URL of your PHP script on the server
    fetch("./get_districts.php")
      .then((response) => response.json())
      .then((data) => {
        // Log the data to the console to verify if it's correct
        console.log(data);
        // Data retrieval successful, now let's update the map colors
        updateMapColors(data);
      })
      .catch((error) => {
        console.error("Error fetching data:", error);
      });
  }

  // Function to update the colors of the map districts
  function updateMapColors(data) {
    // Get the SVG document within the object tag
    const mapObject = document.getElementById("map");
    const svgDoc = mapObject.contentDocument;

    // Define colors for the districts based on their values
    //If want change color acording to value change here
    const colors = [
      { value: 0, color: "#141414" }, // Default color for districts with value 0
      { value: 1, color: "#ffea00" }, // Yellow color for districts with value greater than 0
    ];
    // Define the color for districts with value greater than 0 (yellow color)
    const yellowColor = "#ffea00";

    // Generate color entries for values 1 to 999 with the yellow color
    for (let value = 1; value <= 999; value++) {
      colors.push({ value, color: yellowColor });
    }

    // Loop through each district in the data
    data.forEach((district) => {
      // Find the district shape in the SVG using its ID (assuming the district ID and SVG ID match)
      let districtShape = svgDoc.getElementById(district.id);

      // If the district shape is not found by ID, try finding it by name
      if (!districtShape) {
        const districtName = district.name.toLowerCase().replace(/\s/g, "-");
        districtShape = svgDoc.getElementById(districtName);
      }

      if (districtShape) {
        // Find the color based on the district's value
        const colorObj = colors.find(
          (colorData) => colorData.value === parseInt(district.value)
        );
        const color = colorObj ? colorObj.color : colors[0].color; // Default to the first color if not found

        // Apply the color to the district
        districtShape.style.fill = color;
      }
    });
  }

  // Fetch data and update map colors initially
  fetchData();

  // Set up an interval to update the data every 1 minute (or as required)
  // Remove this interval if you don't need periodic updates
  setInterval(fetchData, 60000); // 1 minute interval (60000 milliseconds)
});
