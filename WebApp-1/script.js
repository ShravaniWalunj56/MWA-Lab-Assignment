function displayGreeting() {
  var name = document.getElementById("nameInput").value;
  var greetingDiv = document.getElementById("greeting");

  // Fetching the XML file
  fetch('messages.xml')
  .then(response => response.text())
  .then(xmlText => {
      var parser = new DOMParser();
      var xmlDoc = parser.parseFromString(xmlText, "text/xml");

      // Selecting random message from XML
      var messages = xmlDoc.getElementsByTagName("message");
      var randomIndex = Math.floor(Math.random() * messages.length);
      var message = messages[randomIndex].textContent;

      // Replacing {name} with user input
      message = message.replace("{name}", name);

      // Displaying the message
      greetingDiv.innerHTML = message;
  })
  .catch(error => console.error('Error fetching XML:', error));
}
