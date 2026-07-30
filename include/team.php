<style>
    /* ── card ── */
    .team-card {
        background: #ffffff;
        border: none;
        border-radius: 24px;
        padding: 32px 20px 28px;
        transition: transform 0.3s ease, box-shadow 0.4s ease;
        box-shadow: 0 12px 40px rgba(74, 108, 247, 0.08);
        position: relative;
        overflow: hidden;
        height: 100%;
        border: 1px solid #ff5421;
    }

    .team-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 28px 60px rgba(74, 108, 247, 0.18);
    }

    /* subtle glow accent */
    .team-card::before {
        content: '';
        position: absolute;
        top: -60%;
        right: -60%;
        width: 200px;
        height: 200px;
        background: radial-gradient(circle, rgba(74, 108, 247, 0.06) 0%, transparent 70%);
        border-radius: 50%;
        pointer-events: none;
        transition: 0.5s;
    }

    .team-card:hover::before {
        top: -40%;
        right: -40%;
        width: 240px;
        height: 240px;
    }

    /* avatar */
    .avatar-wrapper {
        width: 140px;
        height: 140px;
        margin: 0 auto 18px;
        border-radius: 50%;
        padding: 3px;
        background: linear-gradient(135deg, #7b2302, #d44a19);
        box-shadow: 0 8px 24px rgba(74, 108, 247, 0.25);
        transition: 0.3s;
    }

    .team-card:hover .avatar-wrapper {
        box-shadow: 0 12px 36px rgba(74, 108, 247, 0.40);
    }

    .avatar-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #fff;
        display: block;
    }

    .card-title {
        font-weight: 700;
        font-size: 1.4rem;
        color: #0b1a33;
        margin-bottom: 2px;
    }

    .card-role {
        font-size: 0.95rem;
        font-weight: 500;
        color: #d44a19;
        letter-spacing: 0.3px;
        margin-bottom: 14px;
    }

    .card-text {
        color: #333;
        font-size: 0.95rem;
        line-height: 1.6;
        padding: 0 4px;
    }

    /* social icons */
    .social-links {
        display: flex;
        justify-content: center;
        gap: 14px;
        margin-top: 18px;
    }

    .social-links a {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        background: #f0f4ff;
        color: #2f3d5a;
        font-size: 1.1rem;
        transition: 0.25s ease;
        text-decoration: none;
    }

    .social-links a:hover {
        background: #4a6cf7;
        color: #fff;
        transform: scale(1.08);
        box-shadow: 0 6px 16px rgba(74, 108, 247, 0.30);
    }

    .mt-80 {
        margin-top: 60px;
    }

    /* ── responsive tweaks ── */
    @media (max-width: 768px) {
        .team-section {
            padding: 50px 0 60px;
        }

        .section-title {
            font-size: 2.2rem;
        }

        .team-card {
            padding: 28px 16px 24px;
        }

        .avatar-wrapper {
            width: 120px;
            height: 120px;
        }
    }

    @media (max-width: 576px) {
        .team-card {
            max-width: 360px;
            margin-left: auto;
            margin-right: auto;
        }
    }
</style>

<section class="team-section p-tb-100">
    <div class="container">
        <!-- three cards -->
        <div class="row g-4 justify-content-center">
            <div class="col-md-8 col-sm-10 mb-30">
                <div
                    class=" text-center about-section-title section-title section-title-left section-title-shapeless section-title-lineless section-title-thirdcolor">
                    <small class="font-family-3">Our Founders</small>
                    <h2>Neev Step into Success The Visionary Trio<span> Behind the Mission</span></h2>
                </div>
            </div>
        </div>
        <!-- Founder 1 -->
        <div class="row g-4 justify-content-center">
            <div class="col-md-4 col-sm-6">
                <a href="team-dr-vartika-rao.php">
                    <div class="team-card text-center">
                        <div class="avatar-wrapper">
                            <img src="assets/images/team/dr-vartika-rao.jpg" alt="Dr. Vartika Rao" />
                        </div>
                        <h5 class="card-title">Dr. Vartika Rao</h5>
                        <p class="card-role">Co-founder</p>
                        <p class="card-text">
                            IIT (ISM) Ph.D., educator, researcher, and social entrepreneur with 15+ years of experience
                            in
                            education and innovation.
                        </p>
                    </div>
                </a>
            </div>

            <!-- Founder 2 -->
            <div class="col-md-4 col-sm-6">
                <div class="team-card text-center">
                    <div class="avatar-wrapper">
                        <img src="assets/images/team/er-shailja-singh.jpg" alt="Er. Shailja Singh" />
                    </div>
                    <h5 class="card-title">Er. Shailja Singh</h5>
                    <p class="card-role">Co-founder</p>
                    <p class="card-text">
                        Passionate educator dedicated to mentoring students through innovation, leadership, and
                        value-based learning.
                    </p>
                </div>
            </div>

            <!-- Founder 3 -->
            <div class="col-md-4 col-sm-6">
                <a href="team-priyanka-pandey.php">
                    <div class="team-card text-center">
                        <div class="avatar-wrapper">
                            <img src="assets/images/team/priyanka-pandey.jpg" alt="Priyanka Pandey" />
                        </div>
                        <h5 class="card-title">Priyanka Pandey</h5>
                        <p class="card-role">Co-founder</p>
                        <p class="card-text">
                            MCA graduate inspiring students through resilience, technology, and a strong commitment to
                            education.
                        </p>
                    </div>
                </a>
            </div>

        </div><!-- /row -->
    </div>
</section>