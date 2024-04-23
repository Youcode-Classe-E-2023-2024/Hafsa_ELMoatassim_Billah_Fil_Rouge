@include('Partials.layout')
@include('Partials.Top_Bar')

@include('Partials.nav')

<div class="max-w-screen-xl mx-auto">
    <main class="mt-10">
        <div class="mb-4 md:mb-0 w-full max-w-screen-md mx-auto relative" style="height: 34em;">
            <div class="absolute left-0 bottom-0 w-full h-full z-10"
                 style="background-image: linear-gradient(180deg,transparent,rgba(0,0,0,.7));"></div>
            <img src="{{ asset('./assets/images/pic4.png') }}" alt="" class="absolute left-0 top-0 w-full h-full z-0 object-cover"/>
            <div class="p-4 absolute bottom-0 left-0 z-20">
                <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
                    Banish Acne: A Comprehensive Guide to Clearer Skin
                </h2>
            </div>
        </div>

        <div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed">
            <p class="pb-6">
                <b>Introduction:</b> <br>
                Acne is a common skin condition that affects people of all ages, causing pimples, blackheads, and other
                blemishes. While it can be frustrating, there are many effective strategies for managing and preventing
                acne.<br>
                <br>
                <b> Understanding Acne:</b><br>

                Acne occurs when hair follicles become clogged with oil and dead skin cells.<br>
                Factors like hormonal changes, genetics, and certain medications can contribute to acne.<br>
                Skincare Routine for Acne-Prone Skin: <br><br>

                <b>Cleansing:</b> Use a gentle cleanser twice daily to remove excess oil and impurities.<br>
                Exfoliation: Use a mild exfoliator once or twice a week to remove dead skin cells and unclog pores.<br><br>

                <b>Treatment:</b> Apply a spot treatment containing benzoyl peroxide or salicylic acid to target individual
                blemishes.<br><br>

                <b>Moisturizing:</b> Use an oil-free moisturizer to keep your skin hydrated without clogging pores.<br>
                Sun Protection: Use a non-comedogenic sunscreen to protect your skin from the sun's harmful rays.<br>
                Lifestyle Changes for Clearer Skin:<br><br>

                <b>Diet:</b> Eat a balanced diet rich in fruits, vegetables, and whole grains, and limit dairy and sugary
                foods.<br><br>

                <b>Hydration:</b> Drink plenty of water to keep your skin hydrated and healthy.<br>
                Stress Management: Practice stress-reducing activities like yoga, meditation, or deep breathing
                exercises.<br><br>

                <b><u>Professional Treatments for Acne:</u></b><br>
                Topical Retinoids: Prescription-strength retinoid creams can help unclog pores and reduce
                inflammation.<br>
                Oral Medications: In severe cases, oral medications like antibiotics or isotretinoin may be
                prescribed.<br>
                Professional Procedures: Dermatologists may perform procedures like chemical peels or laser therapy to
                treat acne.<br>
                Myths and Facts About Acne:<br>
                <br>
                Myth: Squeezing pimples makes them go away faster.<br>
                Fact: Squeezing pimples can actually worsen inflammation and lead to scarring.<br>
                Conclusion:<br>
                Dealing with acne requires a combination of skincare, lifestyle changes, and, in some cases,
                professional treatments. By following a consistent skincare routine and making healthy choices, you can
                achieve clearer, healthier skin.
            </p>

        </div>
    </main>
</div>
@include('Partials.footer')
