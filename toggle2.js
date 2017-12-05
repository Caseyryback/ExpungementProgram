function toggletab2() { 
    // get the tab
    var firstTab = document.getElementById('second');

    // get the current state of the tabs display property 
    var displaySetting = firstTab.style.display;

				
    // now toggle the tab and the button text, depending on current state
    if (displaySetting == 'block') { 
      // tab is visible. hide it
      firstTab.style.display = 'none';
      // change button text
    }
    else { 
      // tab is hidden. show it 
      firstTab.style.display = 'block';
      // change button text
      
    }
	} 