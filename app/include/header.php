<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- DESIGNED AND DEVELOPED BY MICHAEL KIFLE TEFERRA | AKA | MIKEINTOSH SYSTEMS -->
    <link rel="manifest" href="manifest.json">
    <style>
     /* Dark mode styles */
:root.dark-mode {
    --bg-color: #051844;
    --text-color: #BFFFFC;/* #fe5b29; /*#ffffff;*/
    --navbar-color: #f00; /*  dark mode color for navbar */
    --sidebar-color: #343a40; /*  dark mode color for sidebar */
    --controls-bg-color: #051844; /*  dark mode color for controls background */
    --controls-text-color: #ccc; /*  dark mode color for controls text */
    --nav-bg-color: #1a1a1a; /*  dark mode color for nav */
    --vbar-nav-bg-color: ; /*  dark mode color for vbar page nav */
    --navbar-default-bg-color: #454d55; /*  dark mode color for navbar default */
    --navbar-default-border-color: #454d55; /*  dark mode color for navbar default border */
    --navbar-default-gradient-start: #143F6B; /*  dark mode gradient start color */
    --navbar-default-gradient-middle: #06113C; /*  dark mode gradient middle color */
    --navbar-default-gradient-end: #001234; /*  dark mode gradient end color */
    --navbar-default-btn-default-color: #ccc; /*  dark mode color for navbar default btn default */
}

/* Apply dark mode to all elements */
:root.dark-mode * {
    background-color: var(--bg-color);
    color: var(--text-color);
    /* Add other common styles */
}

/* Preserve background color for .bs-welcome-header */
:root.dark-mode .bs-welcome-header {
    background-color: initial;
}

/* Preserve background color for .r-vbar-page .r-content-col .r-body */
:root.dark-mode .r-vbar-page .r-content-col .r-body {
    background-color: #001234;
}

/* Navbar styles in dark mode */
:root.dark-mode nav {
    background-color: var(--navbar-color);
}

/* Sidebar styles in dark mode */
:root.dark-mode .sidebar {
    background-color: var(--sidebar-color);
}

:root.dark-mode .r-pretty-login-page > .r-sideimage {
    background: linear-gradient(90deg, #06113C, #143F6B);
}

/* Additional styles for .r-pretty-login-page > .r-controls */
:root.dark-mode .r-pretty-login-page > .r-controls {
    background: var(--controls-bg-color);
}

/* Additional styles for .r-pretty-login-page > .r-controls .r-mainform in dark mode */
:root.dark-mode .r-pretty-login-page > .r-controls .r-mainform {
    color: var(--controls-text-color);
}

/* Additional styles for .nav in dark mode */
:root.dark-mode .nav {
    background-color: #061E55;/*var(--nav-bg-color);*/
}

/* Additional styles for .r-vbar-page .r-topheader > .navbar in dark mode */
:root.dark-mode .r-vbar-page .r-topheader > .navbar {
    background-color: var(--vbar-nav-bg-color);
    margin-bottom: 0; /* Included from provided styles */
    border-left: none; /* Included from provided styles */
    border-radius: 0; /* Included from provided styles */
}


:root.dark-mode .r-grid > .panel > .panel-heading {
    background-color: #001130;
    color: inherit;
}

/* 

:root.dark-mode .btn-primary {
    color: #001130;
    background-color: #158CBA;
    border-color: #127ba3;
}

*/


:root.dark-mode .r-grid > .panel > .panel-footer {
    background-color: #ffa256;
}

:root.dark-mode .navbar.navbar-default .btn-default:not(:hover) {
    background-color: #158CBA;
}

/* Additional styles for .navbar-default in dark mode */
:root.dark-mode .navbar-default {
    background-color: var(--navbar-default-bg-color);
    border-color: #ff6600; /*var(--navbar-default-border-color);*/
    background-image: -webkit-linear-gradient(var(--navbar-default-gradient-start), var(--navbar-default-gradient-middle) 60%, var(--navbar-default-gradient-end));
    background-image: -o-linear-gradient(var(--navbar-default-gradient-start), var(--navbar-default-gradient-middle) 60%, var(--navbar-default-gradient-end));
    background-image: linear-gradient(var(--navbar-default-gradient-start), var(--navbar-default-gradient-middle) 60%, var(--navbar-default-gradient-end));
    background-repeat: no-repeat;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='var(--navbar-default-gradient-start)', endColorstr='var(--navbar-default-gradient-end)', GradientType=0);
}

/* Additional styles for .navbar.navbar-default .btn-default:not(:hover) in dark mode */
:root.dark-mode .navbar.navbar-default .btn-default:not(:hover) {
    color: var(--navbar-default-btn-default-color);
}

/* Additional styles for the switch container */
.switch-container {
    position: relative;
    display: inline-block;
}

/* Hide the default checkbox */
.switch-container input[type="checkbox"] {
    opacity: 0;
    width: 0;
    height: 0;
}

/* Style the switch label */
.switch-label {
    display: inline-block;
    width: 40px;
    height: 20px;
    background-color: #ccc;
    border-radius: 20px;
    position: relative;
    cursor: pointer;
}

/* Style the toggle icons */
.toggle-icon {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    transition: transform 0.3s ease;
}

/* Move the moon icon to the right */
.toggle-icon.moon {
    right: 20px;
    transform: translateY(-50%) translateX(100%);
}

/* Dark mode specific styles */
.dark-mode .switch-label {
    background-color: #6e6e6e;
}

/* Dark mode specific styles for the toggle icons */
.dark-mode .toggle-icon.sun {
    transform: translateY(-50%) translateX(0%);
}

.dark-mode .toggle-icon.moon {
    transform: translateY(-50%);
}
    </style>
</head>
<body>
    <!-- Dark mode toggle -->
    <div class="switch-container">
        <input type="checkbox" id="dark-mode-toggle" class="switch" />
        <label for="dark-mode-toggle" class="switch-label">
            <span class="toggle-icon sun"></span><!--<span class="toggle-icon sun">🌞</span> LIGHT MODE-->
            <span class="toggle-icon moon">🌜</span>
        </label>
    </div>

    <!-- JavaScript for toggle functionality -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggleSwitch = document.getElementById('dark-mode-toggle');
            const currentTheme = localStorage.getItem('theme') || 'light';

            document.documentElement.classList.add(currentTheme + '-mode');

            toggleSwitch.addEventListener('change', function () {
                if (this.checked) {
                    document.documentElement.classList.replace('light-mode', 'dark-mode');
                    localStorage.setItem('theme', 'dark');
                } else {
                    document.documentElement.classList.replace('dark-mode', 'light-mode');
                    localStorage.setItem('theme', 'light');
                }
            });
        });
    </script>
</body>
</html>
