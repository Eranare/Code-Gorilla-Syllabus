// base building block for categories LI elements
//dumb link variable



//------------------------------------------------------------------------
const HOST = 'server.com/';

function populateCategories(category) {
  const activeMenuItemName = activeMenuItem.children[0].innerHTML;
  api.get(HOST + 'categories', {category, menuItem: activeMenuItemName}, function(categories) {
    let newCategories = '';
    for (const category of categories) {
      const categoryElement = `
        <li class="menu_sub_categories_item">
          <a href="#" class="menu_sub_categories_item_link">${category}</a>
        </li>
      `;
      newCategories += categoryElement;
    }
    const categoriesElement = document.getElementsByClassName(`menu_sub_categories_items-${category}`)[0];
    categoriesElement.innerHTML = newCategories;
  });
}



//--------------------------------------------------------------------------

function showSubmenu() {  //Renamed to show function purpose 
    const submenu = document.getElementsByClassName("menu_sub")[0];
    submenu.style.display = "block"; //if cursor hovers over top bar > show element as block
//---Populating the top submenu and additional submenu with their LI
    populateCategories("top");
    populateCategories("additional");

  }
  
  function hideSubmenu() { //renamed to show function purpose
    const submenu = document.getElementsByClassName("menu_sub")[0];
    submenu.style.display = "none";//defaults to none unless the element is being hovered over by a cursor
  }

  let activeMenuItem = null;

  function onMenuItemMouseEnter(item) {
    if (activeMenuItem) {
      activeMenuItem.classList.remove("menu_main_item-active");
    }
    activeMenuItem = item;
    item.classList.add("menu_main_item-active");
    showSubmenu();
  }
  
  const menuItems = document.getElementsByClassName("menu_main_item"); 
  for (const menuItem of menuItems) { //if hovering over the items in the submenu, this bit makes the submenu stay visible Despite mouse not being on the actual menu itself 
    menuItem.onmouseenter = () => onMenuItemMouseEnter(menuItem) 
  }  
  
  const menu = document.getElementsByClassName("menu")[0];
  menu.onmouseleave = hideSubmenu  //if mouse leaves menu area poof it away



  // Server

  function getCategories(data) {
    if (data.category == 'top') {
      if (data.menuItem == 'Motors') {
        return [
          'Car',
          'Motorcycle',
          'Plane',
          'Trucks',
          'Wheels'
        ];
      }
      if (data.menuItem == 'Fashion') {
        return [
          'Women\'s tops',
          'Men\'s tops',
          'Jeans',
          'Hats'
        ];
      }
      return [
        'Server apple',
        'Server banana',
        'Server pear',
        'Server orange'
      ];
    }
    if (data.category == 'additional') {
      if (data.menuItem == 'Motors') {
        return [
          'Tires',
          'Windshields',
          'Ski racks',
          'Doors',
          'Windows'
        ];
      }
      if (data.menuItem == 'Fashion') {
        return [
          'On sale',
          'Red stuff',
          'Gucci',
          'New Arrivals'
        ];
      }
      return [
        'Server square',
        'Server circle',
        'Server oval',
        'Server diamond'
      ];
    }
    
    
    return [];
  }

const endpoints = {
  "/categories": {
    "get": getCategories
  }
}

function getFunction(url, data, callback) {
  const domain = url.substring(0, url.indexOf("/"));
  const endpoint = url.substring(url.indexOf("/"), url.length);

  callback(endpoints[endpoint]["get"](data));
}

const api = {
  get: getFunction
};

function deactivateMenuItem() {
  activeMenuItem.classList.remove("menu_main_item-active");
}
const submenu = document.getElementsByClassName("menu_sub")[0];
submenu.onmouseleave = deactivateMenuItem;