-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2020 at 04:58 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `B_ID` int(11) NOT NULL,
  `Expert_ID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`B_ID`, `Expert_ID`, `User_ID`, `Date`) VALUES
(37, 18, 2, '2020-12-25'),
(60, 27, 13, '2020-12-25'),
(61, 40, 17, '2020-12-25'),
(72, 18, 12, '2020-12-25'),
(73, 18, 41, '2020-12-25'),
(74, 21, 13, '2020-12-28'),
(76, 26, 47, '2020-12-30'),
(77, 18, 50, '2020-12-30'),
(78, 34, 50, '2020-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `Details1` text NOT NULL,
  `Details2` text NOT NULL,
  `Details3` text NOT NULL,
  `Details4` text NOT NULL,
  `Details5` text NOT NULL,
  `Header1` text NOT NULL,
  `Header2` text NOT NULL,
  `Header3` text NOT NULL,
  `Header4` text NOT NULL,
  `Header5` text NOT NULL,
  `Image` text NOT NULL,
  `Video` text NOT NULL,
  `Type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`ID`, `Name`, `Description`, `Details1`, `Details2`, `Details3`, `Details4`, `Details5`, `Header1`, `Header2`, `Header3`, `Header4`, `Header5`, `Image`, `Video`, `Type`) VALUES
(2, 'Pregnency Care', 'Pregnancy, also known as gestation, is the time during which one or more offspring develops inside a woman.[4] A multiple pregnancy involves more than one offspring, such as with twins.[13] Pregnancy usually occurs by sexual intercourse, but can occur through assisted reproductive technology procedures.[6] This is just over nine months – (gestational age) where each month averages 31 days.[4][5] When using fertilization age it is about 38 weeks.[5] An embryo is the developing offspring during the first eight weeks following fertilization, (ten weeks gestational age) after which, the term fetus is used until birth.[5] Signs and symptoms of early pregnancy may include missed periods, tender breasts, nausea and vomiting, hunger, and frequent urination.[1] Pregnancy may be confirmed with a pregnancy test. Pregnancy is divided into three trimesters, each lasting for approximately 3 months.[4] The first trimester includes conception, which is when the sperm fertilizes the egg.[4] The fertilized egg then travels down the fallopian tubst trimester, the possibility of miscarriage (natural death of embryo or fetus) is at its highest.[2] Around the middle of the second trimester, movement of the fetus may be felt.[4] At 28 weeks, more than 90% of babies can survive outside of the uterus if provided with high-quality medical care.[4] Pregnancy is actually a pretty complicated process that has several steps. It all starts with sperm cells and an egg. Spermns and millions of sperm come out every time you ejaculate — but it only takes 1 sperm cell to meet with an egg for pregnancy to happen. Eggs live in ovaries, and the hormones that control your menstrual cycle cause a few eggs to mature every month. When your egg is mature, it means it’s ready to be fertilized by a sperm cell. These hormones also make the lining of your uterus thick and spongy, which gets your body ready for pregnancy. About halfway through your menstrual cycle, one mature egg leaves the ovary — called ovulation — and travels through the fallopian tube towards your uterus. The egg hangs out for about 12-24 hours, slowly moving through the fallopian king for an egg. They have up to 6 days to find an egg before they die. When a sperm cell joins with an egg, it’s called fertilization. Fertilization doesn’t happen right away. Since sperm can hang out in your uterus and fallopian tube for up to 6 days after sex, there’s up to 6 days between sex and fertilization. If a sperm cell does join up with your egg, the fertilized egg moves down the fallopian tube toward the uterus. It begins to divide into more and more cells, forming a ball as it grows. The ball of cells (called a blastocyst) gets to the uterus about 3–4 days after fertilization. The ball of cells floats in the uterus for another 2–3 days. If the ball of cells attaches to the lining of your uterus, it’s called implantation — when pregnancy officially begins. Implantation usually starts about 6 days after fertilization, and takes about 3-4 days to complete. The embryo develops from cells on the inside of the ball. The placenta develops from the cells on the outside of the ball. When a fertilized egg implants in the uterus, it releases pregnancy hormones that prevent the lining of your uterus from shedding — that’s why people don’t get periods when they’re pregnant. If your egg doesn’t meet up with sperm, or a fertilized egg doesn’t implant in your uterus, the thick lining of your uterus isn’t needed and it leaves your body during your period. Up to half of all fertilized eggs naturally don’t implant in the uterus — they pass out of your body during your period. ', 'As soon as you find out you’re pregnant, get yourself registered for antenatal care. \r\n								  Make an appointment with \r\n								  your GP or a midwife at your \r\n								  local surgery or children\'s centre.\r\n								  Or register online with your local maternity service. ', 'Aim to eat a healthy, balanced diet whenever you can.Fish is full of protein,  								  vitamin D, minerals and omega-3 fatty acids, which are important for the development 								  of your baby’s nervous system.                                        If you don\'t like fish,                                      you can get omega-3 fatty acids from other foods, such as nuts,                          seeds, soya products and green leafy vegetables.                          You don’t need to eat for two when you’re pregnant. 						You don’t need extra calories for the first six months of pregnancy.                            In the last three months you’ll only need another 200 calories a day.                          Stay well hydrated too. The amount of water in your  						body increases during pregnancy to help you maintain healthy blood pressure levels.                        Try to have about eight glasses of fluid, such as water, 					  fruit teas, skimmed or semi-skimmed milk or fresh fruit juice every day. ', 'Wash your hands before handling food, especially if you’ve just been to the toilet, 								  changed a nappy, or handled a pet or other animal.                                        Thoroughly wash utensils, boards and your hands after handling raw meat. 									  Store raw foods separately from ready-to-eat foods. Food hygiene is  									  especially important now you’re pregnant.                                   There are also some foods it’s safest not to eat in pregnancy.  								 This is because they can harbour bacteria or parasites that pose  								 a health risk for your baby.                                  Listeriosis is an infection caused by listeria bacteria. 								Although it’s rare for pregnant women to be affected by it, it can 								have serious effects.                                    Listeriosis can lead to miscarriage, a baby being seriously 								  ill after birth, or even being stillborn. ', 'Regular exercise has many benefits for you, and therefore your baby.                                           Doing gentle exercise.                                             Helps you to cope with changes to your posture and strains on your  										   joints during pregnancy.                                        Helps you to stay a healthy weight, although it\'s normal  									   to put on some weight during pregnancy.                                        Helps to protect you against pregnancy complications, 									   such as high blood pressure.                                          Increases your chance of a straightforward labour and birth.                                   Makes it easier for you to get back into shape after your baby is born.                                      Boosts your mood if you\'re feeling low. ', 'There is no way to know for sure how much alcohol is safe during pregnancy.  						That’s why many experts advise you to cut out alcohol completely while you’re expecting.                        It’s particularly important to avoid too much alcohol during the first trimester 					  and the third trimester.                    In the first trimester, drinking alcohol can increase your risk of miscarriage, 				  while in the third trimester it can affect your baby\'s brain development.                    It\'s recommended that you avoid alcohol completely in the first trimester. 				  If you decide to drink after this stage, stick to no more than one unit or  				  two units of alcohol, no more than once or twice a week.                           Drinking heavily or binge drinking during pregnancy is especially 						 dangerous for your baby.  ', 'See your doctor or midwife as soon as possible ', 'Eat well', 'Be careful about food hygiene', 'Exercise regularly', 'Cut out alcohol', '33.jpg', '', 'Pregnancy Care'),
(4, '', 'Complications of pregnancy are health problems that \r\n								occur during pregnancy. \r\n								               They can involve the mother’s health, the baby’s health,\r\n											   or both. Some women have health problems\r\n								             that arise during pregnancy, and other women have health \r\n											 problems before they become pregnant that could lead to \r\n											 complications. It is very \r\n								                       important for women to receive health care before\r\n													   and during pregnancy to decrease the risk of pregnancy \r\n													   complications. Before Pregnancy:Make sure to talk to your doctor about health problems you have now or have \r\n									had in the past. If you are receiving treatment for a health problem, your health \r\n									care provider might want to change the way your health problem is managed.\r\n									For example, some medicines used to treat health problems could be harmful if \r\n									taken during pregnancy. At the same time, stopping medicines that you need could be \r\n									more harmful than the risks posed should you become pregnant. In addition, be sure\r\n									to discuss any problems you had in any previous pregnancy.\r\n									If health problems are under control and you get good prenatal care, you are likely\r\n									to have a normal, healthy baby.During Pregnancy:Pregnancy symptoms and complications can range from mild and annoying\r\n									discomforts to severe, sometimes life-threatening, illnesses. Sometimes it can \r\n									be difficult for a woman to determine which symptoms are normal and which are not. \r\n									Problems during pregnancy may include physical and mental conditions that affect \r\n									the health of the mother or the baby. These problems can be caused by or can be \r\n									made worse by being pregnant. Many problems are mild and do not progress; however, \r\n									when they do, they may harm the mother or her baby. Keep in mind that there are \r\n									ways to manage problems that\r\n									come up during pregnancy. Always contact your prenatal care provider if you have\r\n									any concerns during your pregnancy.', 'High blood pressure: High blood pressure, also called hypertension, occurs when arteries carrying\r\n									   blood from the heart to the body organs are narrowed. This causes pressure \r\n									   to increase in the arteries.\r\n\r\n                                       Women who have high blood pressure before\r\n									   they get pregnant will continue to have to\r\n									   monitor and control it, with medications if necessary, \r\n									   throughout their pregnancy. High blood pressure that develops \r\n									   in pregnancy is called gestational hypertension. Typically, gestational\r\n									   hypertension occurs during the second half of pregnancy and goes away after\r\n									   delivery.', 'Gestational diabetes: Gestational diabetes occurs when a woman who didn\'t have diabetes before pregnancy\r\n								  develops the condition during pregnancy.\r\n\r\n                               Normally, the body digests parts of your food into a sugar called glucose.\r\n                                Glucose is your body\'s main source of energy. After digestion, the glucose \r\n                               moves into your blood to give your body energy.\r\n\r\n                           To get the glucose out of your blood and into the cells of your body,\r\n                  your pancreas makes a hormone called insulin. In gestational diabetes, hormonal\r\n                  changes from pregnancy cause the body to either not make enough insulin, or not\r\n                         use it normally.', 'Infections: Infections, including some sexually \r\n								  transmitted infections (STIs),\r\n								  may occur during pregnancy and/or delivery and may lead to \r\n								  complications for the pregnant woman, the pregnancy, and the baby after delivery.\r\n								  Some infections can pass from mother to infant during delivery when the infant passes\r\n								  through the birth canal; other infections can infect a fetus during the pregnancy.\r\n								  1 Many of these infections can be prevented or treated with appropriate pre-pregnancy,\r\n								  prenatal, and postpartum follow-up care.', 'Miscarriage: Miscarriage is the term used to describe a pregnancy \r\n								  loss from natural causes before 20 weeks. \r\n								  Signs can include vaginal spotting or bleeding, cramping, or fluid or \r\n								  tissue passing from the vagina.\r\n								  However, bleeding from the vagina does not mean that a miscarriage will happen or \r\n								  is happening.8 Women experiencing this sign at any point in their pregnancy \r\n								  should contact \r\n								  their health care provider.', ' Stillbirth: The loss of pregnancy after the 20th week of pregnancy is called a stillbirth. In approximately\r\n						half of all reported cases, health care providers can find no cause for the loss. However,\r\n						health conditions that can contribute to stillbirth include\r\n						chromosomal abnormalities, placental problems, poor fetal growth, chronic health issues \r\n						of the mother, and infection.', 'High blood pressure:', 'Gestational diabetes:', 'Infections:', 'Miscarriage: ', 'Stillbirth:', '40.jpg\r\n', '', 'Complications'),
(5, '', 'Exercise is any bodily activity that enhances or maintains physical\r\n								                     fitness and overall health and wellness.It is performed for \r\n													 various reasons, to aid growth and improve \r\n													 strength, preventing aging, developing muscles and the \r\n													 cardiovascular system, honing athletic skills, \r\n													 weight loss or maintenance, improving health and also for \r\n													 enjoyment.Many individuals choose to exercise outdoors \r\n													 where they can congregate in groups, socialize, \r\n													 and enhance well-being.In terms of health benefits, \r\n													 the amount of recommended exercise \r\n													 depends upon the goal, the type of exercise, and the age\r\n													 of the person. Even doing a small amount of exercise is\r\n													 healthier than doing none.', 'Aerobic exercise is the kind that makes you breathe harder and builds your fitness up.\r\n                                 It is very beneficial and even at moderate intensity will\r\n					             improve your health.You can get the benefits\r\n                               of aerobic exercise from a brisk walk or a steady cycle ride.', 'As we age, we lose muscle mass. Strength training builds it back.\r\n								  Strengthening your muscles not only makes you stronger, but also stimulates bone growth,\r\n                              lowers blood sugar, assists with weight control, improves balance and posture,\r\n                               and reduces stress and pain in the lower back and joints.', 'Yoga is an ancient form of exercise that focuses on strength,\r\n								  flexibility and breathing to boost physical and mental wellbeing.\r\n								  The main components of yoga are postures \r\n								  (a series of movements designed to increase strength and flexibility)\r\n								  and breathing.', '\r\n								\r\n\r\nZumba is a fitness program that combines Latin and international music with dance moves. Zumba routines incorporate interval training — alternating fast and slow rhythms — to help improve cardiovascular fitness.\r\n\r\nZumba is an aerobic activity that can count toward the amount of aerobic activity recommended for most healthy adults by the Department of Health and Human Services.', 'Cardio exercise simply means that you\'re doing a rhythmi c activity \r\n								  that raises your heart rate into your target heart rate zone,\r\n								  the zone where you\'ll burn the most fat and calories.\r\nCardio training is exercise with the purpose of developing cardiovascular or aerobic fitness. Cardiovascular fitness is a good measure of the heart’s ability to pump oxygen-rich blood to the muscles.\r\n\r\nCardio training generally involves exercising at a constant moderate level of intensity, for a specified duration, during which the cardiovascular system is allowed to replenish oxygen to working muscles. Typical activities include walking, jogging, cycling, swimming, jump rope, stair climbing, and rowing.', 'Aerobic exercise', 'Strength training', 'Yoga', 'Zumba', 'Cardio', '9.jpg', '', 'gym'),
(6, '', 'In nutrition, diet is the sum of food consumed by a \r\n								person or other organism.[1] The word diet often implies the use of \r\n								specific intake of nutrition for\r\n								health or weight-management reasons (with the two often being related).\r\n								Although humans are omnivores, each culture and each person holds some\r\n								food preferences or some food taboos. This may be due to personal tastes\r\n								or ethical reasons. Individual dietary choices may be more or less healthy.\r\n                                 Complete nutrition requires ingestion and absorption of vitamins,\r\n                                 minerals, essential amino acids from protein and essential\r\n                                    fatty acids from fat-containing food, also food energy in\r\n                                    the form of carbohydrate, protein, and fat. Dietary habits\r\n                                    and choices play a significant role in the quality of life, \r\n                                      health and longevity.', 'The Paleolithic diet, Paleo diet, caveman diet, or stone-age diet is a modern fad diet consisting of foods thought to mirror those eaten during the Paleolithic era. There are different variants of the diet; some are predominantly plant-based but the most recent popular variants focus on animal products.', 'A vegan diet contains only plants (such as vegetables, grains, \r\n								  nuts and fruits) and foods made from plants.\r\n							  Vegans do not eat foods that come from animals, including dairy products and eggs.Veganism is the practice of abstaining from the use of animal products, particularly in diet, and an associated philosophy that rejects the commodity status of animals. An individual who follows the diet or philosophy is known as a vegan. Distinctions may be made between several categories of veganism.', 'A low-carb diet is a diet that restricts carbohydrates, \r\n								  such as those found in sugary foods, pasta and bread. \r\n								  It is high in protein, fat and healthy vegetables.There \r\n								  are many different types of low-carb diets,\r\n								  and studies show that they can cause weight\r\n								  loss and improve health.', 'A low-fat diet is one that restricts fat, and often saturated fat and cholesterol\r\n								  as well. Low-fat diets are intended to reduce the occurrence of conditions \r\n								  such as heart disease and obesity. For weight loss, they\r\n								  perform similarly to a low-carbohydrate diet, since macronutrient \r\n								  composition does not determine weight loss success.', 'The keto diet is a very low-carb, higher-fat diet.\r\n								  It’s similar in many ways to other low-carb diets.\r\n                                   While you eat far fewer carbohydrates on a keto diet,\r\n                              you maintain moderate protein consumption and may increase\r\n                                      your intake of fat. The reduction in carb intake\r\n                                    puts your body in a metabolic state called ketosis,\r\n                         where fat, from your diet and from your body, is burned for energy.', 'Paleo diet', 'Vegan diet', 'Low-carb diet', 'Low-fat diet', 'Keto diet', '18.jpg', '', 'Diet Guideline'),
(7, '', 'Skin care is the range of practices that support skin integrity, \r\n								enhance its appearance and relieve skin conditions. They can include nutrition, avoidance\r\n								of excessive sun exposure and appropriate use of emollients. Practices that enhance\r\n								appearance include the use of cosmetics, botulinum, exfoliation, fillers, laser resurfacing,\r\n								microdermabrasion, peels, retinol therapy[1] and ultrasonic skin treatment.[2] Skin care is \r\n								a routine daily procedure in many settings, such as skin that is either too dry or too moist, \r\n								and prevention of dermatitis and prevention of skin injuries.[3]\r\n\r\n                                      Skin care is a part of the treatment of wound healing, radiation \r\n									  therapy and some medications. ', 'Every daily skin care routine should start with cleansing, no matter what.  								  There are plenty of myths floating around that say it\'s ok to skip cleansing  								  your face or just rinse it with water, but that can be detrimental to your 								  complexion. Do you rinse your teeth with water and expect them to be cavity-free?  								  The same is true of your skin – water alone won\'t help.                                      The key to this step, and any of the daily skin care routine steps, is to  									choose the correct product for your skin type.', 'Yes, you need a toner no matter what your skin type is. Going without toner is  								  like skipping hair conditioner – it can leave skin vulnerable to dehydrating, 								  damaging elements. Toner helps rebalance your skin\'s pH levels 								  after cleansing and preps your skin to be better able to absorb the active in 								  gredients in the next products you apply.', 'Without exfoliation, skin tends to appear dull and rough. Boost mi\r\n								  crocirculation and cell turnover by exfoliating 1-3 times per week to transform\r\n								  dull skin into bright, healthy, and radiant skin.', 'This is the step that most daily skin care routines are probably missing and can 								  be the difference between 								  good skin and great skin.                                 Skin serums and treatment cremes allow you to customize your daily routine to the 							   highest level. Crows feet? There\'s a serum for that. Dark spots on your face? ', ' Any basic skin care routine should include a moisturizing broad spectrum sunscreen during the day and  						a hydrating moisturizer at night.                      Two thirds of all sun damage is incidental*. 					That means the sun is damaging your skin every day when you run errands, commute               to work, and more. Always apply a moisturizing broad  			 spectrum sunscreen in the AM no matter what.                  It\'s important to moisturize at night as well. Almost everyone\'s  				skin is dehydrated more often than                   not – even oily skin! Dehydration can lead to a whole slew of problems 				  including dry, flaky skin, excess                             oily production, wrinkles, sensitivity and more.', 'Step 1: Cleanse', 'Step 2: Tone', 'Step 3: Exfoliate', 'Step 4: Apply a targeted treatment', 'Step 5: Moisturize and protect', '46.jpg', '', 'Normal care'),
(8, '', 'Skin care is the range of practices that support skin integrity, \r\n								enhance its appearance and relieve skin conditions. They can include nutrition, avoidance\r\n								of excessive sun exposure and appropriate use of emollients. Practices that enhance\r\n								appearance include the use of cosmetics, botulinum, exfoliation, fillers, laser resurfacing,\r\n								microdermabrasion, peels, retinol therapy[1] and ultrasonic skin treatment.[2] Skin care is \r\n								a routine daily procedure in many settings, such as skin that is either too dry or too moist, \r\n								and prevention of dermatitis and prevention of skin injuries.[3]\r\n\r\n                                      Skin care is a part of the treatment of wound healing, radiation \r\n									  therapy and some medications.', 'Commonly located on the face, neck, shoulders, chest, and upper back                                     Breakouts on the skin composed of blackheads, whiteheads, pimples, or deep, painful  									cysts and nodules                                     May leave scars or darken the skin if untreated', ' Red, painful, fluid-filled blister that appears near the mouth and lips     Affected area will often tingle or burn before the sore is visible     Outbreaks may also be accompanied by mild, flu-like symptoms such as low fever, body aches, and swollen lymph nodes.', ' Itchy, raised welts that occur after exposure to an allergen                                         Red, warm, and mildly painful to the touch                                 Can be small, round, and ring-shaped or large and randomly shaped.', '   Chronic skin disease that goes through cycles of fading and relapse     Relapses may be triggered by spicy foods, alcoholic beverages, sunlight, stress, and the intestinal bacteria  	Helicobacter pylori     There are four subtypes of rosacea encompassing a wide variety of symptoms     Common symptoms include facial flushing, raised, red bumps, facial redness, skin dryness, and skin sensitivity.', '            Yellow or white scaly patches that flake off     Affected areas may be red, itchy, greasy, or oily     Hair loss may occur in the area with the rash    Yellow or white scaly patches that flake off     Affected areas may be red, itchy, greasy, or oily     Hair loss may occur in the area with the rash.One common cause of eczema is allergies. The subsequent rashes can develop in response to certain allergens, including pollen, pet dander, and foods. Another possible cause of eczema is physical contact with chemicals, fabrics, and dyes to which you may be allergic. The resulting skin rash is called contact dermatitis.', 'Acne', 'Cold sore', 'Hives', 'Rosacea', 'Eczema', '52.jpg', '', 'Skin Problem'),
(9, '', 'Depression is a common mental health problem that causes people to 								experience low mood, loss of interest or pleasure, feelings of guilt or low self-worth,  								disturbed sleep or appetite, low energy, and poor concentration.                                   An estimated 1 in 6 people experienced a common mental disorder in the past week,1 with 3.3% of aged 16 and over in England,                              Scotland and Wales estimated to experience depression in the past week.2                                          Symptoms:                        Depression symptoms may vary among people but generally encompass a feeling of sadness or hopelessness. These can include3:      Tiredness and loss of energy     Sadness that doesn’t go away     Loss of self-confidence and self-esteem     Difficulty concentrating     Not being able to enjoy things that are usually pleasurable of interesting     Feeling anxious all the time     Avoiding other people, sometimes even your close friends     Feelings of helplessness and hopelessness     Sleeping problems – difficulties in getting off to sleep or waking up much earlier than usual     Very strong feelings of guilt or worthlessness     Finding it hard to function at work/college/school     Loss of appetite     Loss of sex drive and/or sexual problems     Physical aches and pains     Thinking about suicide and death     Self-harm  Depression symptoms can vary in severity, from mild to moderate to severe depression. If you experience symptoms of depression for most of the day – every day – for more than two weeks, you should seek help from your GP. Causes:  Depression is a complex condition and its causes are not fully understood. However, various contributing factors can lead to depression. These can include biological factors (for example, genetics4 or experience of physical illness or injury5) and psychological or social factors (experiences dating back to childhood6, unemployment7, bereavement8, or life-changing events9 such as pregnancy. Having a long-standing  or life-threatening illness, such as heart disease, back pain or cancer, has been associated with an increased risk of depression ', 'Major depression is also known as major depressive disorder, classic depression, or unipolar  								  depression. It’s fairly common — about 								  16.2 million adults in the U.S. have experienced at least one major depressive episode.                             People with major depression experience symptoms most of the day, every day. Like many mental health 						   conditions, it has little to do with what’s happening around you. You can have a loving family, tons 						   of friends, and a dream job. You can have the kind of life that others envy and still have depression.', '                                      In order to be diagnosed with bipolar I disorder, you have to experience an episode of mania that lasts  						           for seven days, or less if hospitalization                                 is required. You may experience a depressive episode before or following the manic episode.When you become depressed, you may feel sad or hopeless and lose interest or pleasure in most activities. When your mood shifts to mania or hypomania (less extreme than mania), you may feel euphoric, full of energy or unusually irritable. These mood swings can affect sleep, energy, activity, judgment, behavior and the ability to think clearly.\r\n\r\nEpisodes of mood swings may occur rarely or multiple times a year. While most people will experience some emotional symptoms between episodes, some may not experience any.\r\n\r\nAlthough bipolar disorder is a lifelong condition, you can manage your mood swings and other symptoms by following a treatment plan. In most cases, bipolar disorder is treated with medications and psychological counseling (psychotherapy).', 'Some people with major depression also go through periods of losing touch with reality. 								  This is known as psychosis, which can involve hallucinations and delusions. Experiencing both  								  of these together is known clinically as major depressive 								  disorder with psychotic features. However, some providers still refer to this phenomenon as 								  depressive psychosis or psychotic depression.', 'Premenstrual dysphoric disorder (PMDD) is a severe form  								  of premenstrual syndrome (PMS). While PMS symptoms can be both physical 								  and psychological, PMDD symptoms tend to be mostly psychological.', ' Seasonal depression, also called seasonal affective disorder and clinically known as major depressive disorder                              with seasonal pattern, is depression that’s related to certain seasons. For most people,                              it tends to happen during the winter months. While we don\'t know the exact causes of SAD.', ' Major depression', ' Manic depression, or bipolar disorder', ' Depressive psychosis', 'Premenstrual dysphoric disorder', 'Seasonal depression', '53.jpg', '', 'Dipression Type & Solution'),
(10, 'ccccc', 'Feeling sad from time to time is a normal part of life, but feeling crippled by your sadness on a daily basis could be a sign of something else. Depression is a mood disorder characterized by profound feelings of sadness, isolation, hopelessness, or emptiness. Depression can be overwhelming and prevent you from enjoying things you once had interest in. It affects everyone differently, but it can interfere with your daily activities, work, and life in general.\r\n\r\nTreating depression effectively means doing more than taking medications and going to therapy. The more you change your lifestyle to ensure a healthy mind and body, the more you’ll be able to cope with the challenges of depression.\r\n\r\nBelow are some ways you can improve your lifestyle to complement your depression treatment. As always, consult with your doctor before making any changes.Sometimes depression can make people feel as though they are just out of reach and loving someone with depression can be lonely, frustrating, painful and deeply worrying. If you’re close to someone with depression, you might feel as though you’re not making a difference, but that’s what depression does – it’s the dirty little liar that tries to pull the fight out of all of us – those who have the illness and those who care who would do anything to make it better for them. What this research is telling us is that being there, as a trusted friend, has the power to make an enormous difference in helping your loved one find the way out of depression. ', 'There is evidence of a link between stress and depression or anxiety.\r\n\r\nPeople who have a susceptibility to depression may have a higher risk of developing it if they have chronic stress.\r\n\r\nSome people are born with genetic factors that increase their risk. Others may develop a susceptibility during childhood, for example, due to neglect or abuse.\r\n\r\n', 'Research shows that physical activity can act as an antidepressant, and experts encourage doctors to include it as a treatment.  A 2018 review describes exercise as an underutilized treatment for depression. The authors note that it can boost both physical and mental well-being.  Depression can make it hard for some people to start exercising.  People experiencing difficulties in starting exercise could try just 5 minutes of walking or another enjoyable activity in the morning and another 5 minutes in the afternoon. From there, gradually increase over the coming days and weeks.', 'A healthful diet may help prevent depression and boost mental well-being. A 2019 study concluded that dietary interventions could play a role in treating depression.  Research suggests that the following foods may help:      fresh fruits and vegetables     green tea     soybean products     healthful oils, such as olive oil    premade baked goods     trans fats     sugary desserts and sodas  Fresh fruits and vegetables provide antioxidants. These help protect the body from oxidative stress and cell damage. ', 'According to an older article, there is a strong link between depression and insomnia. A lack of sleep may worsen symptoms of depression, and it is also a common symptom.  people can try to improve their sleep naturally   Avoid large meals, caffeine, and alcohol before sleeping.     Do physical exercise during the day.     Remove electronic equipment from the sleeping area and switch off 30 minutes before bedtime.     Get up again if you do not fall asleep within 20 minutes, then try again.     Limit exposure to bright light in the evening.  Other tips include doing breathing or relaxation exercises before sleeping.', 'Various factors can trigger symptoms of stress and depression, and these will vary between individuals. It may be possible to avoid or reduce exposure to some of these triggers.  Triggers    exposure to news, some movies, and other media     using alcohol or drugs, unless the person has a related disorder     having too little sleep due to late nights  If avoiding triggers is not an option, it may be possible to reduce exposure, for example, by deciding on one specific time of day to check emails or watch the news.', ' Avoid stress', ' Exercise', ' Diet', ' Sleep', ' Avoid common triggers', '54.jpg', '', 'Depression Free Tips');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `ID` int(11) NOT NULL,
  `Image` text NOT NULL,
  `Type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`ID`, `Image`, `Type`) VALUES
(1, 'f1.jpg', 'Fitness'),
(3, 's1.jpg', 'Skin Care'),
(4, 'p1.jpg', 'Pregnancy Care'),
(5, 'h1.jpg', 'Depression'),
(6, 'h2.jpg', 'Depression'),
(7, 'h3.jpg', 'Depression'),
(8, 'h4.jpg', 'Depression'),
(9, 'h5.jpg', 'Depression'),
(10, 'h6.jpg', 'Depression'),
(13, 'f2.jpg', 'Fitness'),
(14, 'f3.jpg', 'Fitness'),
(15, 'f4.jpg', 'Fitness'),
(16, 'f5.jpg', 'Fitness'),
(17, 'f6.jpg', 'Fitness'),
(18, 'p2.jpg', 'Pregnancy Care'),
(19, 'p3.jpg', 'Pregnancy Care'),
(20, 'p4.jpg', 'Pregnancy Care'),
(21, 'p5.jpg', 'Pregnancy Care'),
(22, 'p6.jpg', 'Pregnancy Care'),
(28, 's2.jpg', 'Skin Care'),
(29, 's3.jpg', 'Skin Care'),
(31, 's4.jpg', 'Skin Care'),
(32, 's5.jpg', 'Skin Care'),
(40, 's6.jpg', 'Skin Care');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Type` text NOT NULL,
  `Dept` varchar(255) NOT NULL,
  `Picture` text NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `Name`, `Email`, `Password`, `Mobile`, `Type`, `Dept`, `Picture`, `Description`) VALUES
(1, 'Tanzina', 'tanzina@gmail.com', '12345', '+8801677777777', 'Admin', '', '', ''),
(2, 'Sanzida', 'sanzida@gmail.com', '123456', '+0188888888888', 'User', '', '', ''),
(3, 'Swarna Rani', 'e@gmail.com', '123456', '+8801713810173', 'User', '', '', ''),
(12, 'Nishat', 'ab@gmail.com', '1234', '+8801726847390', 'User', '', '', ''),
(13, 'ASIF', 'o@gmail.com', '12345', '+8801726847390', 'User', '', '', ''),
(18, 'Dr.Tamanna Chowdhury', 't@gmail.com', '1231234', '+880172684678', 'Expert', 'Dietitian', 'd8.jpg', 'Principal Dietician\r\nApollo Hospitals Dhaka.\r\nPlot: 81, Block: E, Bashundhara R/A, Dhaka 1229, Bangladesh'),
(21, 'Dr Farzana Ahmed', 'f21@gmail.com', '1234', '+880172684678', 'Expert', 'Dietitian', 'd4.jpg', 'Nutritionist & Dietitan Organization LABAID Specialized Hospital\r\nHome Economics College \r\nunder Dhaka University \r\n B.Sc. in Food & Nutrition \r\nfrom Home Economics College \r\nunder Dhaka University'),
(22, 'Dr.Sumaiya Shahnaz ', 's@gmai.com', '12345', '+8801726847356', 'Expert', 'Dietitian', 'd1.jpg', 'Specialty: Nutrition \r\nIbn Sina Hospital, House no 64, Road# 15/A, Dhanmondi, Dhaka 1209'),
(23, 'Dr Dilara Makhbul', 'gyv@gmail.com', '798769', '+880172684349', 'Expert', 'Dietitian', 'd2.jpg', 'Nutrition & Dietetics \r\nLabaid Specilized Hospital,\r\nHouse- 06, Road-04, Dhanmondi.\r\nDhaka 1205, Bangladesh'),
(24, 'Dr. Kamrun Naher', 'nmv@gmail.com', '12345', '+880172684678', 'Expert', 'Dietitian', 'd3.jpg', 'MBBS\r\nNutrition & Dietetics\r\nLabaid Specialized Hospital,\r\nHouse- 06, Road-04,\r\nDhanmondi.Dhaka 1205, Bangladesh'),
(25, 'Dr. Sumon Chowdhury  ', 'hf21@gmail.com', '123467', '+880172684623', 'Expert', 'Dietitian', 'd6.jpg', 'MBBS, \r\nMPH(RCH), PhD\r\nAnwer Khan Modern Hospital\r\n'),
(26, 'Aysha Siddika', 'h21@gmail.com', '12347', '+880172684666', 'Expert', 'Dietitian', 'd5.jpg', 'Ex Dietitian of Apollo Hospital, Dhaka, Ex-Chief Dietitian of Square Hospital Ltd\r\nChamber1: JAPAN BANGLADESH FRIENDSHIP HOSPITAL\r\nChamber2: Surecell Medical Ltd.'),
(27, ' Dr. Hosne Ara Baby', 'f278@gmail.com', '12348', '+880172684678', 'Expert', 'Gynecologist', 'd9.jpg', 'MBBS, FCPS (Gynae & Obs) ,\r\n Diploma In Reproductive\r\n Medicine & Embryology (Germany)\r\nSpecialist in Gynae & Obs,\r\n Infertility and IVF (In Vitro Fertilization)'),
(28, 'Dr. Kaniz Fatema', 'sq@gmail.com', '12345', '+8801726847357', 'Expert', 'Gynecologist', 'd10.jpg', 'MBBS (Dhaka), DGO (DU)\r\nConsultant, \r\nBangladesh Specialized Hospital'),
(29, 'Dr. Masooma Jalil', 'w@gmail.com', '2345', '+8801726847354', 'Expert', 'Gynecologist', 'd11.jpg', 'MBBS (DMC), FCPS (Gynae & Obs),\r\nCCD (Diabetology)\r\n\r\nConsultant \r\nBangladesh Specialized Hospital'),
(30, 'Dr. Mahbuba Nargis', 'se@gmail.com', '6789', '+8801726847234', 'Expert', 'Gynecologist', 'd12.jpg', 'MBBS (Dhaka), FCPS (Gynae & Obs) , MCPS (Gynae & Obs), DGO, MPH (Reproductive Health)\r\n\r\nConsultant, Bangladesh Specialized Hospital'),
(31, 'Dr. Shamima Nargis', 'seq@gmail.com', '9876', '+880172684678', 'Expert', 'Gynecologist', 'd13.jpg', 'MBBS (DMC), MCPS, \r\n(Gynae & Obs), \r\nFCPS (Gynae & Obs)\r\nConsultant, \r\nBangladesh Specialized Hospital'),
(32, 'Dr. Mukti Rani Saha', 'v@gmail.com', '98768', '+880172684213', 'Expert', 'Gynecologist', 'd14.jpg', 'MBBS (Dhaka), BCS (Health),\r\nFCPS (Gynae & Obs)\r\nAssistant Professor, Bangabandhu Sheikh Mujib Medical University (BSMMU), Dhaka, Consultant, \r\nBangladesh Specialized '),
(33, 'Dr.Zabun Nahar', 'q@gmail.com', '987687', '+880172684612', 'Expert', 'Gynecologist', 'd15.jpg', 'MBBS, MCPS(Gynae and Obstetrics )\r\n\r\nConsultant, Bangladesh Specialized Hospital'),
(34, 'Prof. Dr Anwara Begum', 'l@gmail.com', '79876', '+88017212322', 'Expert', 'Psychiatrist', 'd16.jpg', 'MBBS, FCPS, MRCPsych (London)\r\nProfessor of Psychiatry and Chief Consultant\r\nBIRDEM General Hospital and Ibrahim Medical College, Dhaka, Bangladesh.'),
(35, 'Dr. M S I Mullick', 'yf21@gmail.com', '12347', '+880172684678', 'Expert', 'Psychiatrist', 'd7.jpg', 'MBBS, Phd, FCPS,\r\nMRC Psyc ( London ) , DCAP\r\nProfessor & Chairman, \r\nDepartment of Pshychiatric\r\nPsychiatry\r\nBangabandhu Sheikh Mujib Medical University (BSMMU), Shahbagh, Dhaka\r\n'),
(36, 'Dr. Md. Enayet Karim', 'z@gmail.com', '19876', '+88017265677', 'Expert', 'Psychiatrist', 'd17.jpg', 'MBBS, FCPS (Psychiatry)\r\nPsychiatrist\r\nChamber :Hi Tech\r\nModern Psychiatric Hospital (Pvt.) Ltd.\r\n113/A, Monipuripara, Gate No. 1 Farmgate, Tejgaon, Dhaka-1215, Bangladesh.'),
(37, 'Dr. Dewan Abdur Rahim', 'b@gmail.com', '29876', '+880172681234', 'Expert', 'Psychiatrist', 'd18.jpg', 'PhD, DPM, MCPS (Psych), MBBS\r\nFellow WHO (India), Fellow JICA (Japan)\r\nPsychiatrist\r\nEx. Head of Dept. Psychiatry SSMC Mitford Hospital, Dhaka\r\nChamber: Sandhani Diagnostic Complex\r\nGreen Super Market (3rd Floor), Farmgate, Dhaka, Bangladesh.'),
(38, 'Dr. Farjana Akhter', 'lov@gmail.com', '39876', '+880172683456', 'Expert', 'Dermatologist', 'd19.jpg', 'MBBS, DDV\r\n\r\nSexual Medicine Specialist & Laser Dermatosurgeon'),
(39, 'Dr. Mahmud Chowdhury', 'fv@gmail.com', '09876', '+880172684690', 'Expert', 'Dermatologist', 'd20.jpg', 'MBBS, DDV, MCPS, FCPS\r\n\r\nAllergy Skin-VD, Sexual Medicine Specialist & Laser Dermatosurgeon'),
(40, 'Dr. Md. Rokon Uddin', 'nv@gmail.com', '998768', '+880172684678', 'Expert', 'Dermatologist', 'd21.jpg', 'MBBS (DMC), DDV (BSMMU)\r\n\r\nAllergy Skin-VD, Sexual Medicine Specialist & Laser Dermatosurgeon'),
(41, 'tasmina', 'ta@gmail.com', '1234', '+8801726847391', 'User', '', '', ''),
(43, 'Rakin', 'r@gmail.com', '1234', '+8801716122047', 'User', '', '', ''),
(44, 'Nodi', 'hy@gmail.com', '1234', '+8801713810173', 'User', '', '', ''),
(45, 'trisa', 'trisa@gmail.com', '12345', '+8801726847561', 'User', '', '', ''),
(46, 'Keya', 'k12@gmail.com', '1234', '+8801726847678', 'User', '', '', ''),
(47, 'Nishat', 'n12@gmail.com', '1234', '+8801726847390', 'User', '', '', ''),
(48, 'AS', 'r12@gmail.com', '1234', '+8801456666777', 'User', '', '', ''),
(49, 'Nishat', 'n12@gmail.com', '1234', '+8801716122045', 'User', '', '', ''),
(50, 'Tina', 't23@gmail.com', '1234', '+8801726847397', 'User', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`B_ID`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `B_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
