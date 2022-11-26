function showSubmenu() {  //Renamed to show function purpose 
    const submenu = document.getElementsByClassName("menu_sub")[0];
    submenu.style.display = "block"; //if cursor hovers over top bar > show element as block
  }
  
  function hideSubmenu() { //renamed to show function purpose
    const submenu = document.getElementsByClassName("menu_sub")[0];
    submenu.style.display = "none"; //defaults to none unless the element is being hovered over by a cursor
  }

  let active = null;

  function onMenuItemMouseEnter(item) {
    if (active) {
      active.classList.remove("menu_main_item-active");
    }
    active = item;
    item.classList.add("menu_main_item-active");
    showSubmenu();
  }
  
  const menuItems = document.getElementsByClassName("menu_main_item"); 
  for (const menuItem of menuItems) { //if hovering over the items in the submenu, this bit makes the submenu stay visible Despite mouse not being on the actual menu itself 
    menuItem.onmouseenter = () => onMenuItemMouseEnter(menuItem) 
  }  
  
  const menu = document.getElementsByClassName("menu")[0];
  menu.onmouseleave = hideSubmenu  //if mouse leaves menu area poof it away