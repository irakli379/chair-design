<?php

$block = [

["<svg
    xmlns='http://www.w3.org/2000/svg'
    class='features-icon'
    fill='none'
    viewBox='0 0 24 24'
    stroke='currentColor'
  >
    <path
      stroke-linecap='round'
      stroke-linejoin='round'
      stroke-width='2'
      d='M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z'
    />
  </svg>", "<p class='features-title'><strong>Science meets design</strong></p>",
  "<p class='features-text'>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Natus
    similique adipisci praesentium.
  </p>"], ["<svg
  xmlns='http://www.w3.org/2000/svg'
  class='features-icon'
  fill='none'
  viewBox='0 0 24 24'
  stroke='currentColor'
>
  <path
    stroke-linecap='round'
    stroke-linejoin='round'
    stroke-width='2'
    d='M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
  />
</svg>", "<p class='features-title'>
<strong>Maximal comfort</strong>
</p>",
"<p class='features-text'>
Reprehenderit optio placeat quasi excepturi architecto, explicabo
facilis perspiciatis error maxime magnam.
</p>"], ["<svg
xmlns='http://www.w3.org/2000/svg'
class='features-icon'
fill='none'
viewBox='0 0 24 24'
stroke='currentColor'
>
<path
  stroke-linecap='round'
  stroke-linejoin='round'
  stroke-width='2'
  d='M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z'
/>
</svg>", "<p class='features-title'>
<strong>Ethical and sustainable</strong>
</p>", "<p class='features-text'>
Deleniti recusandae quidem nesciunt, eos dolorum iure, quaerat
omnis est laudantium voluptatem voluptas!
</p>"]
];

function chair($array) {
for ($i = 0; $i < sizeof($array); $i++) {
    for ($m = 0; $m < sizeof($array[$i]); $m++) {
        if ($m == 0) {
        echo "<div>" . $array[$i][$m];
        } else if ($m == sizeof($array[$i]) - 1) {
            echo $array[$i][$m] . "</div>";
        }
    }
}
};

chair($block);
