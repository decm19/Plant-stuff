<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Explore the families" />
  <meta name="keywords" content="FloraDB" />
  <meta name="author" content="VWZ" />
  <title>Explore1</title>
   <link rel="stylesheet" href="style/style.css">
</head>
<body>


<?php include "header.php" ?>
<div class="layout">
 <main>

    <h1>Welcome to Families</h1>
	<section>
      <h2>What Is a Family?</h2>
      <p>
        A family is a large group of related plants that share a common set of
        characteristics, such as the structure of their flowers or the way their
        fruits develop. Botanists use families to organise the huge variety of plant
        life into manageable groups. On this page you will meet four families that
        are well represented in the forests of Sarawak: Sapindaceae, Orchidaceae,
        Arecaceae and Moraceae.
      </p>
      <p>
        Each family below includes a short description, a photograph and a few key
        facts. Later pages look at the genera and species within each family.
      </p>
    </section>
	
	<section>
      <h2>The Four Families</h2>

      <article class="family-card" id="sapindaceae">
        <div>
          <h3>1. Sapindaceae (Soapberry Family)</h3>
          <p>
            The Sapindaceae occur in temperate to tropical regions, many in laurel
			forest habitat, throughout the world. Plants of this family have habits 
			ranging from trees to herbaceous plants to lianas, and usually with 
			compound leaves and small flowers. Many of its members
            produce juicy, edible fruits. Sarawak's forests contain wild relatives
            of familiar fruit crops, which makes them valuable for future breeding.
          </p>
		  <div class="family-buttons">
            <a href="explorer2.php#sapindaceae" class="family-btn">Genera</a>
            <a href="explorer3.php#sapindaceae" class="family-btn">Species</a>
          </div>
        </div>
        <figure>
          <img src="images/Lychee.jpg" alt="Fruits of a plant in the Sapindaceae family">
          <figcaption>Figure 1: Lychee (Fruits of the soapberry family).</figcaption>
        </figure>
      </article>

      <article class="family-card" id="orchidaceae">
        <div>
          <h3>2. Orchidaceae (Orchid Family)</h3>
          <p>
            Orchidaceae is one of the largest flowering plant families in the world.
            Orchids may grow on tree branches or on the ground, and their flowers
            have a specially shaped lip. Their seeds are tiny and need help from
            fungi to germinate. Borneo is a hotspot for orchids, and many Sarawak
            species are protected by law.
          </p>
		  <div class="family-buttons">
            <a href="explorer2.php#orchidaceae" class="family-btn">Genera</a>
            <a href="explorer3.php#orchidaceae" class="family-btn">Species</a>
          </div>
        </div>
        <figure>
          <img src="images/Orchid.jpg" alt="Flower of a Sarawak orchid">
          <figcaption>Figure 2: An orchid flower (Orchidaceae).</figcaption>
        </figure>
      </article>

      <article class="family-card" id="arecaceae">
        <div>
          <h3>3. Arecaceae (Palm Family)</h3>
          <p>
            Palms usually have a single unbranched stem topped with a crown of large
            fan-shaped or feather-shaped leaves. Sarawak has upright palms, swamp
            palms and climbing rattans. Rattan canes have long been used by local
            communities for weaving baskets, mats and furniture.
          </p>
		  <div class="family-buttons">
            <a href="explorer2.php#arecaceae" class="family-btn">Genera</a>
            <a href="explorer3.php#arecaceae" class="family-btn">Species</a>
          </div>
        </div>
        <figure>
          <img src="images/palm-tree.jpg" alt="Palm Tree">
          <figcaption>Figure 3: A palm tree of the Arecaceae family.</figcaption>
        </figure>
      </article>

      <article class="family-card" id="moraceae">
        <div>
          <h3>4. Moraceae (Mulberry and Fig Family)</h3>
          <p>
            Moraceae is mostly made up of tropical trees whose tissues contain a
            milky sap. Its best-known genera are <em>Artocarpus</em> and
            <em>Ficus</em>. Figs are a key food source for birds, monkeys and bats,
            so they support many other animals in the rainforest.
          </p>
		  <div class="family-buttons">
            <a href="explorer2.php#moraceae" class="family-btn">Genera</a>
            <a href="explorer3.php#moraceae" class="family-btn">Species</a>
          </div>
        </div>
        <figure>
          <img src="images/Tamaran.jpg" alt="Fruit in the Moraceae family">
          <figcaption>Figure 4: Artocarpus Tamaran of the Moraceae family.</figcaption>
        </figure>
      </article>
    </section>
 
 <section>
      <h2>Families at a Glance</h2>

      <h3>Visiting Order</h3>
      <ol>
        <li>Sapindaceae</li>
        <li>Orchidaceae</li>
        <li>Arecaceae</li>
        <li>Moraceae</li>
      </ol>

      <h3>Key Terms</h3>
      <dl>
        <dt>Epiphyte</dt>
        <dd>A plant that grows on another plant for support without harming it, as many orchids do.</dd>
        <dt>Aril</dt>
        <dd>A fleshy covering around a seed, found in many Sapindaceae fruits.</dd>
        <dt>Rattan</dt>
        <dd>A climbing palm with long, flexible stems used for weaving and furniture.</dd>
        <dt>Keystone species</dt>
        <dd>A species that many other organisms depend on, such as forest figs.</dd>
      </dl>
    </section>
 
 </main>
 
 
 <aside>
    <h2>Fun Fact</h2>
    <p>
      Sarawak's state flower, the Normah orchid, belongs to the Orchidaceae family.
      It is a good example of how a single plant can become a symbol of a whole
      region.
    </p>
	
	<h2>Quick Links</h2>
    <nav class="aside-nav">
      <a href="#" class="aside-btn">Identify</a>
      <a href="#" class="aside-btn">Contributor</a>
      <a href="explorer1.php" class="aside-btn">Families</a>
      <a href="explorer2.php" class="aside-btn">Genera</a>
      <a href="explorer3.php" class="aside-btn">Species</a>
    </nav>
  </aside>
 </div>
 
<?php include "footer.php" ?>
</body>
</html>
