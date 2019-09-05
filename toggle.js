function toggletab() { 
    // get the tab
    var firstTab = document.getElementById('first');

    // get the current state of the tabs display property 
    var displaySetting = firstTab.style.display;

    //get the  button 
    var tabButton = document.getElementsByClassName('tabButton');
				
    // now toggle the tab and the button text, depending on current state
    if (displaySetting == 'block') { 
      // tab is visible. hide it
      firstTab.style.display = 'none';
      // change button text
      tabButton.innerHTML = 'Show fist answer';
    }
    else { 
      // tab is hidden. show it 
      firstTab.style.display = 'block';
      // change button text
      tabButton.innerHTML = 'Hide answer';
    }
	} 
	