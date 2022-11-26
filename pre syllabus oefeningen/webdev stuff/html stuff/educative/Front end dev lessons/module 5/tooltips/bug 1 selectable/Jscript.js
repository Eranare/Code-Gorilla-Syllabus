const svgs = `
    <svg class="tooltip_icon">
      <path d="M19.074 21.117c-1.244 0-2.432-.37-3.532-1.096a7.792 7.792 0 0 1-.703-.52c-.77.21-1.57.32-2.38.32-4.67 0-8.46-3.5-8.46-7.8C4 7.7 7.79 4.2 12.46 4.2c4.662 0 8.457 3.5 8.457 7.803 0 2.058-.85 3.984-2.403 5.448.023.17.06.35.118.55.192.69.537 1.38 1.026 2.04.15.21.172.48.058.7a.686.686 0 0 1-.613.38h-.03z" fill-rule="evenodd"></path>
    </svg>
    <svg class="tooltip_icon">
      <path d="M19.074 21.117c-1.244 0-2.432-.37-3.532-1.096a7.792 7.792 0 0 1-.703-.52c-.77.21-1.57.32-2.38.32-4.67 0-8.46-3.5-8.46-7.8C4 7.7 7.79 4.2 12.46 4.2c4.662 0 8.457 3.5 8.457 7.803 0 2.058-.85 3.984-2.403 5.448.023.17.06.35.118.55.192.69.537 1.38 1.026 2.04.15.21.172.48.058.7a.686.686 0 0 1-.613.38h-.03z" fill-rule="evenodd"></path>
    </svg>
    <svg class="tooltip_icon">
      <path d="M19.074 21.117c-1.244 0-2.432-.37-3.532-1.096a7.792 7.792 0 0 1-.703-.52c-.77.21-1.57.32-2.38.32-4.67 0-8.46-3.5-8.46-7.8C4 7.7 7.79 4.2 12.46 4.2c4.662 0 8.457 3.5 8.457 7.803 0 2.058-.85 3.984-2.403 5.448.023.17.06.35.118.55.192.69.537 1.38 1.026 2.04.15.21.172.48.058.7a.686.686 0 0 1-.613.38h-.03z" fill-rule="evenodd"></path>
    </svg>
    <svg class="tooltip_icon">
      <path d="M19.074 21.117c-1.244 0-2.432-.37-3.532-1.096a7.792 7.792 0 0 1-.703-.52c-.77.21-1.57.32-2.38.32-4.67 0-8.46-3.5-8.46-7.8C4 7.7 7.79 4.2 12.46 4.2c4.662 0 8.457 3.5 8.457 7.803 0 2.058-.85 3.984-2.403 5.448.023.17.06.35.118.55.192.69.537 1.38 1.026 2.04.15.21.172.48.058.7a.686.686 0 0 1-.613.38h-.03z" fill-rule="evenodd"></path>
    </svg>
`;

const toolTip = document.createElement("div");
toolTip.classList.add("tooltip");
toolTip.innerHTML = svgs;

const toolTipTail = document.createElement("div");
toolTipTail.classList.add("tooltip_tail");

document.onmouseup = () => {
  const selection = document.getSelection();
  const anchorNode = selection.anchorNode;
  const focusNode = selection.focusNode;

  if (anchorNode != focusNode) {
    // Cross-paragraph selection
    return;
  }
  
  const rangeRect = selection.getRangeAt(0).getClientRects()[0]; //Range and Rect

  document.body.appendChild(toolTip);
  document.body.appendChild(toolTipTail);

  const toolTipWidth = toolTip.offsetWidth;
  const toolTipHeight = toolTip.offsetHeight;
  const toolTipTailWidth = toolTipTail.offsetWidth;
  const toolTipTailHeight = toolTipTail.offsetHeight;

  const y = rangeRect.y;
  const middleX = rangeRect.x + (rangeRect.width/2);

  toolTip.style.top = `${y - toolTipHeight - toolTipTailHeight/2}px`;
  toolTip.style.left = `${middleX - toolTipWidth/2}px`;

  toolTipTail.style.top = `${y - toolTipTailHeight/2}px`;
  toolTipTail.style.left = `${middleX - toolTipTailWidth/2}px`;
}


/*-------------------refactored above
document.onmouseup = () => {
  const selection = document.getSelection();
  console.log(selection);
  const anchorNode = selection.anchorNode;
  const focusNode = selection.focusNode;

  if (anchorNode != focusNode) {
    // Cross-paragraph selection
    return;
  }
  
  const selectedText = anchorNode.data.substring(selection.anchorOffset, selection.focusOffset);

  const rangeRect = selection.getRangeAt(0).getClientRects()[0];

/*
  const dot = document.createElement("div");
  dot.style.width = "5px";
  dot.style.height = "5px";
  dot.style.background = "red";
  dot.style.position = "absolute";
  // Middle
  dot.style.left = `${rangeRect.x + (rangeRect.width/2)}px`; //range 
  dot.style.top = `${rangeRect.y}px`;
  document.body.appendChild(dot);
} */
//-------------------------------------

/*


const toolTip = document.createElement("div"); //changing dot into the SVG for
toolTip.classList.add("tooltip");
toolTip.innerHTML = svgs;
toolTip.style.left = `${rangeRect.x + (rangeRect.width/2)}px`;
toolTip.style.top = `${rangeRect.y}px`;
document.body.appendChild(toolTip);
}
//----- Deifining how mnany SVG's and what they look like
const svgs = `
  <svg class="tooltip__icon">
    <path d="M19.074 21.117c-1.244 0-2.432-.37-3.532-1.096a7.792 7.792 0 0 1-.703-.52c-.77.21-1.57.32-2.38.32-4.67 0-8.46-3.5-8.46-7.8C4 7.7 7.79 4.2 12.46 4.2c4.662 0 8.457 3.5 8.457 7.803 0 2.058-.85 3.984-2.403 5.448.023.17.06.35.118.55.192.69.537 1.38 1.026 2.04.15.21.172.48.058.7a.686.686 0 0 1-.613.38h-.03z" fill-rule="evenodd"></path>
  </svg>
  <svg class="tooltip__icon">
    <path d="M19.074 21.117c-1.244 0-2.432-.37-3.532-1.096a7.792 7.792 0 0 1-.703-.52c-.77.21-1.57.32-2.38.32-4.67 0-8.46-3.5-8.46-7.8C4 7.7 7.79 4.2 12.46 4.2c4.662 0 8.457 3.5 8.457 7.803 0 2.058-.85 3.984-2.403 5.448.023.17.06.35.118.55.192.69.537 1.38 1.026 2.04.15.21.172.48.058.7a.686.686 0 0 1-.613.38h-.03z" fill-rule="evenodd"></path>
  </svg>
  <svg class="tooltip__icon">
    <path d="M19.074 21.117c-1.244 0-2.432-.37-3.532-1.096a7.792 7.792 0 0 1-.703-.52c-.77.21-1.57.32-2.38.32-4.67 0-8.46-3.5-8.46-7.8C4 7.7 7.79 4.2 12.46 4.2c4.662 0 8.457 3.5 8.457 7.803 0 2.058-.85 3.984-2.403 5.448.023.17.06.35.118.55.192.69.537 1.38 1.026 2.04.15.21.172.48.058.7a.686.686 0 0 1-.613.38h-.03z" fill-rule="evenodd"></path>
  </svg>
  <svg class="tooltip__icon">
    <path d="M19.074 21.117c-1.244 0-2.432-.37-3.532-1.096a7.792 7.792 0 0 1-.703-.52c-.77.21-1.57.32-2.38.32-4.67 0-8.46-3.5-8.46-7.8C4 7.7 7.79 4.2 12.46 4.2c4.662 0 8.457 3.5 8.457 7.803 0 2.058-.85 3.984-2.403 5.448.023.17.06.35.118.55.192.69.537 1.38 1.026 2.04.15.21.172.48.058.7a.686.686 0 0 1-.613.38h-.03z" fill-rule="evenodd"></path>
  </svg>
`; */