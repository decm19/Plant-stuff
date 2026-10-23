<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="The extra CSS enhancements used on the FloraDB website and where to find them." />
  <meta name="keywords" content="enhancement, hover effect, hamburger menu, dropdown" />
  <meta name="author" content="VWZ" />
  <title>Enhancements</title>
  <link rel="stylesheet" href="style/style.css">
</head>
<body>

<?php include "header.php" ?>
<div class="layout">
  <main>

    <section>
      <h1>Enhancements</h1>
      <p>
        This page explains the extra features that were added to the website beyond
        the basic requirements. Each enhancement below describes what it does, how it
        was built with HTML and CSS, and where on the site you can see it working.
        The manual on the right tells you how to trigger each one.
      </p>
    </section>

    <div class="enhancement-grid">

      
      <section class="enhancement" id="hover-effect">
        <h2>1. Button / link hover effect</h2>
        <p>
          Every link and button on the site reacts when the mouse moves over it. This
          covers the <a href="explorer.php">main navigation menu</a>, the dropdown
          items, the profile icon, the green buttons on the Explorer pages, the outline
          buttons, the source buttons on the Acknowledgement page, and the buttons on the
          <a href="register.php">Register form</a>.
        </p>
        <p>
          Each of these has a <code>:hover</code> rule that changes the background
          colour, plus a <code>transition</code> declaration of 0.3 seconds. Because
          of the transition, the colour fades smoothly instead of switching instantly.
          For example, <code>.nav-btn</code> fades to white, <code>.family-btn</code>
          darkens from light green to dark green, and <code>.outline-btn</code> fills
          with green while its text turns white. All of these rules are in
          <code>style/style.css</code>.
        </p>
        <p class="reference">
          Reference:
          <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/transition" target="_blank" rel="noopener noreferrer">MDN Web Docs &ndash; the CSS transition property</a>.
        </p>
      </section>

      
      <section class="enhancement" id="hamburger-menu">
        <h2>2. CSS-only hamburger navigation with a hover dropdown</h2>
        <p>
          On wide screens the full menu is always visible across the top of the page.
          When the window is 800px wide or narrower, as on a phone, the five menu
          buttons collapse behind a hamburger icon (three bars) at the top right, next
          to the profile icon.
        </p>
        <p>
          This is built with the &ldquo;checkbox hack&rdquo;. A hidden
          <code>&lt;input type="checkbox"&gt;</code> is paired with a
          <code>&lt;label&gt;</code> that draws the three bars. A CSS general sibling
          selector, <code>.menu-toggle:checked ~ .nav-center</code>, changes the menu
          from <code>display: none</code> to <code>display: flex</code> when the box is
          checked. No JavaScript is involved.
        </p>
        <p>
          Inside the menu, hovering over <strong>Explorer</strong> opens a dropdown with
          direct links to Families, Genera and Species. This uses
          <code>.dropdown:hover .dropdown-menu</code>, and
          <code>:focus-within</code> so that keyboard users can open it too. The profile
          icon works the same way and lists Profile, Register and Login. On narrow
          screens, where hover is unreliable on touch, the media query instead shows
          the Explorer links already expanded.
        </p>
        <p class="reference">
          Reference(s):
          <a href="https://css-tricks.com/the-checkbox-hack/" target="_blank" rel="noopener noreferrer">CSS-Tricks &ndash; &ldquo;The Checkbox Hack&rdquo;</a>,
          <a href="https://www.w3schools.com/howto/howto_css_dropdown_navbar.asp" target="_blank" rel="noopener noreferrer">W3Schools &ndash; &ldquo;How To Create a Dropdown Navbar&rdquo;</a>.
        </p>
      </section>

      
      <section class="enhancement" id="flip-card">
        <h2>3. Flip cards</h2>
       <p>The contributor cards on the Contributor page use 3D CSS transforms (perspective, 
	   transform-style: preserve-3d and backface-visibility: hidden in the flip-card rules) 
	   so that clicking or focusing a card flips it over to reveal plant data and observational 
	   comments on the back, without any JavaScript.
	   </p>
	   <p class="reference">
          Reference:
          <a href="https://www.w3schools.com/howto/howto_css_flip_card.asp" target="_blank" rel="noopener noreferrer">MDN Web Docs &ndash; the CSS transition property</a>.
        </p>
      </section>

            <section class="enhancement" id="sticky-navbar">
        <h2>4. Sticky navigation bar</h2>
        <p>
          The navigation bar stays at the top of the screen while the page is scrolled.
          On long pages, such as the Species page with its sixteen cards, visitors can
          open the Explorer menu, the profile menu or the hamburger menu at any time
          without scrolling back to the top.
        </p>
        <p>
          This is done with three lines of CSS on the <code>.navbar</code> class:
          <code>position: sticky</code>, <code>top: 0</code> and
          <code>z-index: 200</code>. A sticky element behaves like a normal element
          until the page is scrolled to the offset given by <code>top</code>, and then
          it stays in place. Unlike <code>position: fixed</code>, a sticky bar remains
          part of the normal page flow, so the content below it does not slide
          underneath it and no extra spacing is needed. The <code>z-index</code> value
          keeps the bar and its dropdown menus above the page content when they overlap.
        </p>
        <p class="reference">
          Reference(s):
          <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/position" target="_blank" rel="noopener noreferrer">MDN Web Docs &ndash; the CSS position property</a>,
          <a href="https://dev.to/patriscus/a-sticky-situation-position-sticky-in-css-35oe" target="_blank" rel="noopener noreferrer">DEV Community &ndash; &ldquo;A Sticky Situation (position sticky in CSS)&rdquo;</a>.
        </p>
      </section>

    </div>

  </main>

  <aside>
    <h2>Manual</h2>
    <h3>Finding each enhancement</h3>
    <ol>
      <li>Each section above links to a page where the feature is live.</li>
      <li>To see the hover effect, move the mouse over any button or menu item.</li>
      <li>To see the hamburger menu, make the browser window narrower than 800px, or open the developer tools (F12) and switch to the phone view.</li>
      <li>To see the dropdown on a wide screen, hover over Explorer or the profile icon.</li>
    </ol>


  </aside>
</div>

<?php include "footer.php" ?>

</body>
</html>
