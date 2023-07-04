<?php

$chairDetails = [
    [
        "<svg
        xmlns='http://www.w3.org/2000/svg'
        class='chair-icon'
        fill='none'
        viewBox='0 0 24 24'
        stroke='currentColor'
      >
        <path
          stroke-linecap='round'
          stroke-linejoin='round'
          stroke-width='2'
          d='M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z'
        />
      </svg>",
      "<span>Work</span>"
    ],
    [
        "<svg
                    xmlns='http://www.w3.org/2000/svg'
                    class='chair-icon'
                    fill='none'
                    viewBox='0 0 24 24'
                    stroke='currentColor'
                  >
                    <path
                      stroke-linecap='round'
                      stroke-linejoin='round'
                      stroke-width='2'
                      d='M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z'
                    />
                  </svg>",
                  "<span>Comfortable for 8h</span>"
    ],
    [
        "<svg
                    xmlns='http://www.w3.org/2000/svg'
                    class='chair-icon'
                    fill='none'
                    viewBox='0 0 24 24'
                    stroke='currentColor'
                  >
                    <path
                      stroke-linecap='round'
                      stroke-linejoin='round'
                      stroke-width='2'
                      d='M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
                    />
                  </svg>",
                  "<span>Vegan leather</span>"
    ],
    [
        "<svg
                    xmlns='http://www.w3.org/2000/svg'
                    class='chair-icon'
                    fill='none'
                    viewBox='0 0 24 24'
                    stroke='currentColor'
                  >
                    <path
                      stroke-linecap='round'
                      stroke-linejoin='round'
                      stroke-width='2'
                      d='M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4'
                    />
                  </svg>",
                  "<span>Weighs 22 kg</span>"
    ]
    ];







function cardTwo($array) {
    for ($i = 0; $i < sizeof($array); $i++) {
      for ($m = 0; $m < sizeof($array[$i]); $m++) {
          if ($m == 0) {
          echo "<li>" . $array[$i][$m];
          } else if ($m == sizeof($array[$i]) - 1) {
              echo $array[$i][$m] . "</li>";
          }
      }
  }
};

cardTwo($chairDetails);