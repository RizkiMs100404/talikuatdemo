    
    const modeSwitch = document.getElementById('modeSwitch');
    const icon = document.getElementById('icon');

    // Load the theme from localStorage
    const currentTheme = localStorage.getItem('theme');
    if (currentTheme) {
        document.body.classList.toggle('dark', currentTheme === 'dark');
        modeSwitch.checked = currentTheme === 'dark';
        icon.textContent = currentTheme === 'dark' ? '🌜' : '🌞';
    }

    // Event listener for the switch
    modeSwitch.addEventListener('change', () => {
        const isDarkMode = modeSwitch.checked;
        document.body.classList.toggle('dark', isDarkMode);
        icon.textContent = isDarkMode ? '🌜' : '🌞';
        localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');
    });