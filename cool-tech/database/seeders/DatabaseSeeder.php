<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('categories')->truncate();
        
        DB::table('categories')->insert([
            'id' => 1,
            'category' => 'Tech News',
            'slug' => Str::slug('Tech News')
        ]);
        
        DB::table('categories')->insert([
            'id' => 2,
            'category' => 'Hardware Reviews',
            'slug' => Str::slug('Hardware Reviews')
        ]);
        
        DB::table('categories')->insert([
            'id' => 3,
            'category' => 'Software Reviews',
            'slug' => Str::slug('Software Reviews')
        ]);
        
        DB::table('categories')->insert([
            'id' => 4,
            'category' => 'Opinion Pieces',
            'slug' => Str::slug('Opinion Pieces')
            
        ]);      
        
        DB::table('tags')->truncate();
        
        DB::table('tags')->insert([
            'id' => 1,
            'tag' => 'AI',
            'slug' => Str::slug('AI')
        ]);
        
        DB::table('tags')->insert([
            'id' => 2,
            'tag' => 'ChatGPT',
            'slug' => Str::slug('ChatGPT')
        ]);
        
        DB::table('tags')->insert([
            'id' => 3,
            'tag' => 'Google',
            'slug' => Str::slug('Google')
        ]);
        
        DB::table('tags')->insert([
            'id' => 4,
            'tag' => 'Virtual Reality',
            'slug' => Str::slug('Virtual Reality')
        ]);
        
        DB::table('tags')->insert([
            'id' => 5,
            'tag' => 'Cryptocurrency',
            'slug' => Str::slug('Cryptocurrency')
        ]);
        
        DB::table('tags')->insert([
            'id' => 6,
            'tag' => 'Smart Watch',
            'slug' => Str::slug('Smart Watch')
        ]);
        
        DB::table('tags')->insert([
            'id' => 7,
            'tag' => 'SSD',
            'slug' => Str::slug('SSD')
        ]);
        
        DB::table('tags')->insert([
            'id' => 8,
            'tag' => 'CPU',
            'slug' => Str::slug('CPU')
        ]);
        
        DB::table('tags')->insert([
            'id' => 9,
            'tag' => 'GPU',
            'slug' => Str::slug('GPU')
        ]);
        
        DB::table('tags')->insert([
            'id' => 10,
            'tag' => 'Curved Monitor',
            'slug' => Str::slug('Curved Monitor')
        ]);
        
        DB::table('tags')->insert([
            'id' => 11,
            'tag' => 'PS5',
            'slug' => Str::slug('PS5')
        ]);
        
        DB::table('tags')->insert([
            'id' => 12,
            'tag' => 'Intel',
            'slug' => Str::slug('Intel')
        ]);
        
        DB::table('tags')->insert([
            'id' => 13,
            'tag' => 'AMD',
            'slug' => Str::slug('AMD')
        ]);
        
        DB::table('tags')->insert([
            'id' => 14,
            'tag' => 'NVidia',
            'slug' => Str::slug('NVidia')
        ]);
        
        DB::table('tags')->insert([
            'id' => 15,
            'tag' => 'Android',
            'slug' => Str::slug('Android')
        ]);
        
        DB::table('tags')->insert([
            'id' => 16,
            'tag' => 'Python',
            'slug' => Str::slug('Python')
        ]);
        
        DB::table('tags')->insert([
            'id' => 17,
            'tag' => 'Java',
            'slug' => Str::slug('Java')
        ]);
        
        DB::table('tags')->insert([
            'id' => 18,
            'tag' => 'PHP',
            'slug' => Str::slug('PHP')
        ]);
        
        DB::table('tags')->insert([
            'id' => 19,
            'tag' => 'ReactJS',
            'slug' => Str::slug('ReactJS')
        ]);
        
        DB::table('tags')->insert([
            'id' => 20,
            'tag' => 'C++',
            'slug' => Str::slug('C++')
        ]);
        
        DB::table('tags')->insert([
            'id' => 21,
            'tag' => 'Social Media',
            'slug' => Str::slug('Social Media')
        ]);
        
        DB::table('tags')->insert([
            'id' => 22,
            'tag' => 'Twitter',
            'slug' => Str::slug('Twitter')
        ]);
        
        DB::table('tags')->insert([
            'id' => 23,
            'tag' => 'Facebook',
            'slug' => Str::slug('Facebook')
        ]);
        
        DB::table('tags')->insert([
            'id' => 24,
            'tag' => 'Electric Cars',
            'slug' => Str::slug('Electric Cars')
        ]);
        
        DB::table('tags')->insert([
            'id' => 25,
            'tag' => 'Chatbots',
            'slug' => Str::slug('Chatbots')
        ]);
        
        DB::table('tags')->insert([
            'id' => 26,
            'tag' => 'Smart Phones',
            'slug' => Str::slug('Smart Phones')
        ]);
        
        DB::table('tags')->insert([
            'id' => 27,
            'tag' => 'Inverters',
            'slug' => Str::slug('Inverters')
        ]);
        
        DB::table('articles')->truncate();
        
        DB::table('articles')->insert([
            'id' => 1,
            'category_id' => 1,
            'title' => 'Tech News 1',
            'body' => '<p> team of scientists has announced a major breakthrough in energy storage technology. By developing a novel 
nanomaterial-based battery, they have achieved unprecedented energy density and charging speeds. This innovation has the potential to 
revolutionize renewable energy storage, making it more efficient and accessible for widespread adoption. With renewable energy sources 
becoming increasingly prevalent, this breakthrough could significantly contribute to a sustainable energy future.</p>',
            'creation_date' => '2024-01-07 13:08:30'
        ]);
        
        DB::table('articles')->insert([
            'id' => 2,
            'category_id' => 1,
            'title' => 'Tech News 2',
            'body' => '<p>In a groundbreaking development, researchers at a leading tech institute have achieved a major 
breakthrough in quantum computing. Leveraging advanced quantum algorithms and state-of-the-art hardware, they have successfully 
demonstrated a quantum computer capable of solving complex optimization problems exponentially faster than classical computers. 
This milestone brings us one step closer to realizing the immense potential of quantum computing in revolutionizing various fields, 
including cryptography, drug discovery, and artificial intelligence.</p><p>Exciting advancements in augmented reality (AR) technology 
are on the horizon, with industry leaders unveiling their latest innovations. Through sophisticated AR glasses and immersive applications, 
users can now experience seamless integration of digital content into their physical surroundings. From interactive gaming experiences to 
enhanced productivity tools, the possibilities for AR-driven solutions are endless. With major players investing heavily in AR development, 
we anticipate a rapid evolution in how we interact with the digital world. </p>',
            'creation_date' => '2024-03-08 09:30:00'
        ]);
        
        DB::table('articles')->insert([
            'id' => 3,
            'category_id' => 1,
            'title' => 'Tech News 3',
            'body' => '<p>A team of scientists has announced a major breakthrough in energy storage technology. By developing a novel 
nanomaterial-based battery, they have achieved unprecedented energy density and charging speeds. This innovation has the potential to 
revolutionize renewable energy storage, making it more efficient and accessible for widespread adoption. With renewable energy sources 
becoming increasingly prevalent, this breakthrough could significantly contribute to a sustainable energy future.</p><p> Advancements in 
wearable technology are poised to revolutionize healthcare. From smartwatches that monitor vital signs to wearable patches that deliver personalized drug doses, 
these devices offer unprecedented insights into individuals
 health in real-time. With the integration of artificial intelligence and machine learning algorithms, wearable devices can provide early detection of 
health issues and personalized treatment recommendations. As these technologies continue to evolve, they have the potential to transform how we approach 
healthcare, leading to more proactive and personalized patient care.</p>',
            'creation_date' => '2024-02-21 12:08:20'
        ]);
        
        DB::table('articles')->insert([
            'id' => 4,
            'category_id' => 1,
            'title' => 'Tech News 4',
            'body' => '<p>Robotics in healthcare is reaching new heights as researchers unveil innovative robotic assistants designed to assist medical professionals 
in surgeries and patient care. These robots are equipped with advanced sensors and AI algorithms, allowing them to perform tasks with precision and efficiency, 
ultimately improving patient outcomes and reducing the workload on healthcare staff.</p><p>The field of agriculture is undergoing a transformation with the introduction 
of autonomous farming robots. These robots are capable of autonomously planting, watering, and harvesting crops, leading to increased efficiency and reduced labor 
costs for farmers. With the integration of machine learning, these robots can adapt to changing environmental conditions and optimize crop yields, paving the way for 
sustainable and scalable agricultural practices.</p>',
            'creation_date' => '2024-02-26 15:07:10'
        ]);
        
        DB::table('articles')->insert([
            'id' => 5,
            'category_id' => 1,
            'title' => 'Tech News 5',
            'body' => '<p>The world of cybersecurity is facing unprecedented challenges as cyber threats continue to evolve in complexity and sophistication. 
With the proliferation of digital technologies and interconnected systems, businesses and individuals are increasingly vulnerable to cyberattacks. As a result, 
cybersecurity experts are intensifying their efforts to develop robust defense mechanisms, leveraging advanced encryption algorithms and artificial intelligence to 
safeguard sensitive data and mitigate potential risks.</p><p>The gaming industry is experiencing a revolution with the rise of cloud gaming services that offer 
gamers unprecedented access to high-quality gaming experiences without the need for expensive hardware. By streaming games directly to devices over the internet, 
cloud gaming platforms are democratizing access to gaming content, allowing players to enjoy their favorite titles on a wide range of devices, from smartphones to smart TVs. 
This paradigm shift in gaming is reshaping the industry landscape, with traditional gaming consoles facing increasing competition from cloud-based alternatives.</p>',
            'creation_date' => '2024-02-11 16:05:20'
        ]);
        
        DB::table('articles')->insert([
            'id' => 6,
            'category_id' => 2,
            'title' => 'Hardware Review 1',
            'body' => '<p>The XYZ Gaming Laptop sets a new standard in portable gaming performance with its sleek design and powerhouse internals. 
Featuring a cutting-edge Intel Core i9 processor and NVIDIA GeForce RTX graphics card, this laptop delivers blazing-fast speeds and stunning visuals, 
making it ideal for both gaming and content creation tasks. The high-refresh-rate display ensures smooth gameplay, while the advanced cooling system keeps 
temperatures in check even during intense gaming sessions. With customizable RGB lighting and a premium build quality, the XYZ Gaming Laptop offers a truly 
immersive gaming experience in a compact form factor.
</p><p>Despite its impressive performance, the XYZ Gaming Laptop falls short in battery life, lasting only a few hours under heavy usage. Additionally, the lack of Thunderbolt 
connectivity limits its expandability options, restricting users from connecting high-speed external devices. While the keyboard and trackpad offer decent tactile feedback, 
some users may find them slightly cramped for extended typing sessions. However, these minor drawbacks are overshadowed by the laptops exceptional gaming performance and overall 
value for money, making it a top choice for gamers on the go.</p>',
            'creation_date' => '2024-03-01 09:10:17'
        ]);
        
        DB::table('articles')->insert([
            'id' => 7,
            'category_id' => 2,
            'title' => 'Hardware Review 2',
            'body' => '<p>The XYZ Smartwatch redefines the concept of wearable technology with its sleek design and multifunctional features. Boasting a vibrant OLED display and 
intuitive touchscreen interface, this smartwatch offers users seamless access to notifications, fitness tracking, and a variety of apps right at their fingertips. 
Equipped with advanced health sensors, including heart rate monitoring and sleep tracking, the XYZ Smartwatch provides valuable insights into users overall well-being. 
Its water-resistant design and long-lasting battery life make it the perfect companion for active lifestyles, whether in the gym or out on the trails.
</p><p>owever, some users may find the XYZ Smartwatchs proprietary operating system lacking in terms of app compatibility compared to other smartwatches on the market. Additionally, 
the absence of built-in GPS functionality may disappoint outdoor enthusiasts who rely on precise location tracking during their adventures. Despite these minor drawbacks, the XYZ Smartwatch excels 
in delivering essential smartwatch functionalities with style and reliability, making it a worthy contender in the ever-growing wearable technology market..</p>',
            'creation_date' => '2024-01-01 06:10:22'
        ]);
        
        DB::table('articles')->insert([
            'id' => 8,
            'category_id' => 2,
            'title' => 'Hardware Review 3',
            'body' => '<p>The ABC Wireless Earbuds offer an unparalleled listening experience with their ergonomic design and cutting-edge audio technology. 
Featuring Bluetooth 5.0 connectivity, these earbuds provide seamless pairing and stable connections, allowing users to enjoy crisp, clear sound without any 
interruptions. With built-in noise cancellation technology, the ABC Wireless Earbuds block out ambient noise, immersing users in their favorite music or podcasts. 
The compact charging case ensures extended listening sessions on the go, while the intuitive touch controls make it easy to manage playback and calls with a simple tap.
</p><p>While the ABC Wireless Earbuds deliver impressive sound quality and comfort, some users may find the lack of customizable EQ settings limiting their ability to fine-tune audio preferences. 
Additionally, the earbuds battery life may not meet the expectations of heavy users, requiring frequent recharging throughout the day. Despite these minor drawbacks, the ABC Wireless Earbuds offer 
exceptional value for their price point, providing a convenient and enjoyable listening experience for music enthusiasts and casual listeners alike.</p>',
            'creation_date' => '2024-02-03 10:10:13'
        ]);
        
        DB::table('articles')->insert([
            'id' => 9,
            'category_id' => 2,
            'title' => 'Hardware Review 4',
            'body' => '<p>The LMN Ultra-Slim Laptop redefines portability with its lightweight design and impressive performance capabilities. Powered by a high-performance Intel Core i7 processor 
and integrated Intel Iris Xe graphics, this laptop delivers snappy performance for everyday tasks and multimedia consumption. Its sleek aluminum chassis not only adds a touch of elegance but also 
ensures durability for long-term use. The vibrant Full HD display provides stunning visuals, whether youre watching movies or editing photos. With long battery life and fast charging capabilities, 
the LMN Ultra-Slim Laptop is the perfect companion for professionals on the go.
</p><p>However, some users may find the keyboard layout on the LMN Ultra-Slim Laptop to be slightly cramped, especially during extended typing sessions. Additionally, the absence of dedicated graphics 
may not meet the needs of users looking for a laptop capable of handling demanding tasks such as gaming or video editing. Despite these minor drawbacks, the LMN Ultra-Slim Laptop excels in delivering a 
balance of performance and portability, making it a great choice for students, business professionals, and anyone in need of a reliable everyday laptop.</p>',
            'creation_date' => '2024-07-27 10:10:14'
        ]);
        
        DB::table('articles')->insert([
            'id' => 10,
            'category_id' => 2,
            'title' => 'Hardware Review 5',
            'body' => '<p>The PQR Wireless Gaming Mouse offers gamers a competitive edge with its precision tracking and customizable features. Equipped with a high-precision optical sensor and adjustable DPI settings, 
this wireless mouse delivers smooth and responsive cursor movements, essential for fast-paced gaming sessions. With programmable buttons and onboard memory, users can customize macros and save profiles for different 
gaming genres, enhancing their gameplay experience. The ergonomic design ensures comfortable use even during extended gaming sessions, while the long-lasting battery life ensures uninterrupted gameplay without the hassle of 
frequent recharging.</p><p>However, some users may find the PQR Wireless Gaming Mouse software interface to be less intuitive compared to other gaming peripherals, requiring a bit of a learning curve to fully utilize its 
advanced features. Additionally, while the wireless connection offers convenience and flexibility, some hardcore gamers may prefer a wired connection for minimal latency. Despite these minor drawbacks, the PQR Wireless Gaming 
Mouse offers exceptional value for its price, providing gamers with a reliable and customizable tool to elevate their gaming performance.</p>',
            'creation_date' => '2024-03-05 09:10:18'
        ]);
        
        DB::table('articles')->insert([
            'id' => 11,
            'category_id' => 3,
            'title' => 'Software Review 1',
            'body' => '<p>Adobe Premiere Pro stands as a cornerstone in the realm of video editing software, offering professionals and enthusiasts alike a robust suite of tools for crafting stunning visual content. 
With its intuitive interface and seamless integration with other Adobe Creative Cloud applications, Premiere Pro streamlines the editing process, allowing users to bring their creative visions to life with ease. 
Its comprehensive feature set includes advanced video and audio editing capabilities, powerful color grading tools, and support for a wide range of file formats. Whether youre editing short films, documentaries, 
or social media content, Premiere Pro provides the flexibility and versatility needed to tackle any project with confidence.
</p><p>However, some users may find the subscription-based pricing model of Adobe Creative Cloud to be a barrier to entry, especially for those on a tight budget or casual users who only require occasional access to the software. 
Additionally, Premiere Pros steep learning curve may intimidate newcomers to video editing, requiring dedication and practice to master its full potential. Despite these challenges, the wealth of resources available online, 
including tutorials and community forums, can help users overcome these hurdles and unlock the full power of Adobe Premiere Pro for their video editing needs.</p>',
            'creation_date' => '2024-01-06 09:14:19'
        ]);
        
        DB::table('articles')->insert([
            'id' => 12,
            'category_id' => 3,
            'title' => 'Software Review 2',
            'body' => '<p>Filmora by Wondershare is a user-friendly video editing software tailored for beginners and casual users. With its simple interface and intuitive drag-and-drop functionality, Filmora allows users to 
create professional-looking videos with minimal effort. Featuring a wide range of built-in templates, effects, and transitions, it offers ample customization options to enhance your videos. Whether youre editing family vacation footage 
or creating content for social media, Filmora provides the essential tools needed to bring your ideas to life quickly and easily.</p><p>However, advanced users may find Filmoras feature set limited compared to more robust video editing 
software like Adobe Premiere Pro or Final Cut Pro. The lack of advanced editing tools and limited support for high-end features may hinder its suitability for complex video projects. Despite these limitations, Filmoras affordability 
and ease of use make it an attractive option for beginners and casual users looking to dip their toes into video editing without breaking the bank.</p>',
            'creation_date' => '2024-03-03 10:14:14'
        ]);
        
        DB::table('articles')->insert([
            'id' => 13,
            'category_id' => 3,
            'title' => 'Software Review 3',
            'body' => '<p>DaVinci Resolve, by Blackmagic Design, is renowned for its professional-grade editing and color grading capabilities. Its intuitive interface and comprehensive feature set make it a top choice for filmmakers. 
Despite its steep learning curve, Resolves powerful tools for color correction, audio editing, and visual effects ensure stunning results for both beginners and experienced users.
</p><p>However, beginners may find Resolves interface overwhelming initially, and performance issues can arise when handling high-resolution footage. Nevertheless, Resolve remains a go-to option for professionals and aspiring 
filmmakers seeking a robust video editing solution.</p>',
            'creation_date' => '2024-03-02 12:12:15'
        ]);
        
        DB::table('articles')->insert([
            'id' => 14,
            'category_id' => 3,
            'title' => 'Software Review 4',
            'body' => '<p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. 
If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained 
law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.
</p><p>Society excited by cottage private an it esteems. Fully begin on by wound an. Girl rich in do up or both. 
At declared in as rejoiced of together. He impression collecting delightful unpleasant by prosperous as on. 
End too talent she object mrs wanted remove giving.</p>',
            'creation_date' => '2023-01-26 12:13:15'
        ]);
        
        DB::table('articles')->insert([
            'id' => 15,
            'category_id' => 3,
            'title' => 'Software Review 5',
            'body' => '<p>Final Cut Pro, developed by Apple, is a top-tier video editing software renowned for its intuitive interface and powerful editing capabilities. With features like magnetic timeline and seamless integration 
with other Apple products, Final Cut Pro offers a streamlined editing experience for both beginners and professionals. Its robust set of tools for editing, color grading, and audio processing make it a versatile choice for filmmakers 
and content creators looking to produce high-quality videos efficiently.</p><p>However, Final Cut Pros availability exclusively on macOS may limit its accessibility for users on other operating systems. Additionally, some users may 
find the initial investment in hardware and software to be relatively high compared to other video editing solutions. Despite these drawbacks, Final Cut Pro remains a popular choice in the industry for its reliability, performance, 
and seamless integration with the Apple ecosystem.</p>',
            'creation_date' => '2024-03-01 13:13:19'
        ]);
        
        DB::table('articles')->insert([
            'id' => 16,
            'category_id' => 4,
            'title' => 'Opinion Piece 1',
            'body' => '<p>Artificial intelligence (AI) holds immense potential to revolutionize industries, but concerns about ethics and societal impact persist. As AI becomes more autonomous, questions about accountability and job 
displacement become paramount.</p><p>Despite challenges, responsible AI development can address societal issues. By balancing innovation with ethical considerations, we can harness AIs power for collective benefit while mitigating 
risks.</p>',
            'creation_date' => '2024-01-08 09:28:49'
        ]);
        
        DB::table('articles')->insert([
            'id' => 17,
            'category_id' => 4,
            'title' => 'Opinion Piece 2',
            'body' => '<p>Cryptocurrency has emerged as a disruptive force in the financial world, offering decentralized and borderless transactions. Advocates tout its potential to democratize finance and provide financial freedom 
to individuals worldwide. However, concerns about volatility and regulatory uncertainty cast a shadow over its widespread adoption, raising questions about its long-term viability as a mainstream form of currency.
</p><p>Despite these challenges, the underlying blockchain technology powering cryptocurrencies holds promise for revolutionizing various industries beyond finance. From supply chain management to voting systems, 
blockchains transparent and tamper-proof nature offers opportunities for increased efficiency and trust. With continued innovation and regulatory clarity, cryptocurrency could become a cornerstone of the digital 
economy in the years to come.</p>',
            'creation_date' => '2024-03-10 10:25:45'
        ]);
        DB::table('articles')->insert([
            'id' => 18,
            'category_id' => 4,
            'title' => 'Opinion Piece 3',
            'body' => '<p>The shift towards remote work has been accelerated by the global pandemic, prompting businesses to reevaluate traditional office structures. Proponents argue that remote work offers flexibility and work-life 
balance, allowing employees to work from anywhere while reducing commute times and carbon emissions. However, concerns about productivity, team collaboration, and mental health persist, highlighting the need for effective remote 
work policies and support systems.</p><p>Despite challenges, remote work has demonstrated its viability and potential to reshape the future of work. As companies embrace hybrid work models and invest in remote-friendly technologies, 
opportunities for talent acquisition and diversity are expanded. With careful planning and adaptation, remote work has the potential to foster innovation, inclusivity, and resilience in the modern workforce.</p>',
            'creation_date' => '2024-02-17 12:22:49'
        ]);
        
        DB::table('articles')->insert([
            'id' => 19,
            'category_id' => 4,
            'title' => 'Opinion Piece 4',
            'body' => '<p>Social media has transformed the way we communicate, connect, and consume information, offering unprecedented access to a global audience. Advocates celebrate its ability to amplify voices, foster community, 
and democratize content creation. However, concerns about privacy, misinformation, and the addictive nature of social media platforms raise questions about their impact on society and mental well-being.</p><p>Despite these challenges, 
social media remains a powerful tool for social change and civic engagement. From organizing grassroots movements to raising awareness about important issues, social media empowers individuals to effect meaningful change. With greater 
transparency, regulation, and digital literacy initiatives, we can harness the potential of social media to build more informed, connected, and inclusive communities.
</p>',
            'creation_date' => '2024-02-25 11:20:46'
        ]);
        
        DB::table('articles')->insert([
            'id' => 20,
            'category_id' => 4,
            'title' => 'Opinion Piece 5',
            'body' => '<p>The integration of artificial intelligence (AI) into healthcare holds immense promise for revolutionizing patient care and medical research. AI-powered algorithms can analyze vast amounts of medical data 
with unprecedented speed and accuracy, aiding in diagnosis, treatment planning, and drug discovery. However, concerns about patient privacy, algorithm bias, and regulatory oversight loom large, raising questions about the ethical and equitable 
deployment of AI in healthcare.</p><p>Despite these challenges, the potential benefits of AI in healthcare are undeniable. By augmenting the capabilities of healthcare professionals and improving clinical decision-making, AI has the potential 
to enhance patient outcomes and reduce healthcare disparities. With thoughtful collaboration between technologists, healthcare professionals, and policymakers, we can navigate the complexities of AI in healthcare to ensure that it serves the 
best interests of patients and society as a whole.</p>',
            'creation_date' => '2024-02-28 13:12:45'
        ]);
        
        
        DB::table('article_tag')->insert([
            'article_id' => 1,
            'tag_id' => 1
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 1,
            'tag_id' => 2
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 2,
            'tag_id' => 1
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 2,
            'tag_id' => 4
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 3,
            'tag_id' => 5
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 4,
            'tag_id' => 1
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 4,
            'tag_id' => 3
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 4,
            'tag_id' => 6
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 5,
            'tag_id' => 5
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 6,
            'tag_id' => 7
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 7,
            'tag_id' => 8
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 7,
            'tag_id' => 9
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 7,
            'tag_id' => 13
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 8,
            'tag_id' => 10
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 8,
            'tag_id' => 14
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 9,
            'tag_id' => 11
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 10,
            'tag_id' => 9
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 10,
            'tag_id' => 14
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 11,
            'tag_id' => 16
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 11,
            'tag_id' => 17
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 11,
            'tag_id' => 20
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 12,
            'tag_id' => 15
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 13,
            'tag_id' => 18
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 13,
            'tag_id' => 19
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 14,
            'tag_id' => 18
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 14,
            'tag_id' => 20
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 15,
            'tag_id' => 16
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 16,
            'tag_id' => 21
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 16,
            'tag_id' => 22
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 16,
            'tag_id' => 23
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 17,
            'tag_id' => 24
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 18,
            'tag_id' => 25
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 19,
            'tag_id' => 26
        ]);
        
        DB::table('article_tag')->insert([
            'article_id' => 20,
            'tag_id' => 27
        ]);    

    }
}