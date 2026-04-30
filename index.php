<?php include 'header.php'; ?>

<section class="hero">
    <div class="hero-content">
        <h1>Αρχαία Ελλάδα</h1>
        <p>Εξερευνήστε το παρελθόν που ζει στο παρόν.</p>
        <a href="#explore" class="btn-hero">Ανακαλύψτε</a>
    </div>
</section>

<main class="container">
    <section class="olympics-section">
        <h2>ΟΛΥΜΠΙΑΚΟΙ ΑΓΩΝΕΣ</h2>
        <p>
            Μάθετε για τους ιερούς αγώνες της Αρχαιότητας, όπου οι καλύτεροι αθλητές 
            από όλο τον ελληνικό κόσμο αναμετρώνταν για το υπέρτατο έπαθλο της δόξας 
            και το στεφάνι της αγριελιάς.
        </p>
        <div class="image-grid">
            <img src="images/kalimarmaro.jpg" alt="Καλλιμάρμαρο">
            <img src="images/arxaia olumpia.jpg" alt="Αρχαία Ολυμπία">
        </div>
        <a href="page.php?slug=olympics" class="btn-more">Ανακαλύψτε Περισσότερα</a>
    </section>

    <section class="philosophers-section">
        <div class="philosopher-card">
            <div class="card-image">
                <img src="images/Arxaioi-Filosofoi.jpg" alt="Αρχαίοι Φιλόσοφοι">
            </div>
            <div class="card-text">
                <h2>Η ΓΕΝΝΗΣΗ ΤΗΣ ΦΙΛΟΣΟΦΙΑΣ</h2>
                <p>
                    “Στην Αρχαία Ελλάδα, η αναζήτηση της αλήθειας και της γνώσης έγινε τρόπος ζωής.”
                </p>
                <a href="page.php?slug=filosofoi" class="btn-more">Ανακαλύψτε Περισσότερα</a>
            </div>
        </div>
    </section>

    <section class="athens-section">
        <h2>ΑΘΗΝΑ: ΤΟ ΛΙΚΝΟ ΤΟΥ ΠΟΛΙΤΙΣΜΟΥ</h2>
        <p>
            Ανακαλύψτε τα μυστικά της αρχιτεκτονικής τελειότητας και την καθημερινή ζωή 
            στην πόλη της Παλλάδος Αθήνας.
        </p>
        <div class="image-grid">
            <img src="images/Athens2.jpg" alt="Αθήνα">
        </div>
        <a href="page.php?slug=athens" class="btn-more">Ανακαλύψτε Περισσότερα</a>
    </section>

    <section class="mythology-section">
        <h2>ΕΛΛΗΝΙΚΗ ΜΥΘΟΛΟΓΙΑ</h2>
        <p>
            Βυθιστείτε στον κόσμο όπου το θείο συναντά το ανθρώπινο.
        </p>
        <div class="image-grid">
            <img src="images/12_θεοι.jpg" alt="Ηρακλής">
            <img src="images/apollwn-theos-.jpg" alt="Ποσειδώνας">
        </div>
        <a href="page.php?slug=mythology" class="btn-more">Ανακαλύψτε Περισσότερα</a>
    </section>
</main>

<?php include 'footer.php'; ?>