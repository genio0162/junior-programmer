-- Adminer 4.8.1 PostgreSQL 14.6 (Ubuntu 14.6-0ubuntu0.22.04.1) dump

DROP TABLE IF EXISTS "articles";
DROP SEQUENCE IF EXISTS articles_id_seq;
CREATE SEQUENCE articles_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."articles" (
    "id" bigint DEFAULT nextval('articles_id_seq') NOT NULL,
    "title" character varying(255) NOT NULL,
    "user_id" bigint NOT NULL,
    "publisher_id" bigint NOT NULL,
    "journal_id" bigint NOT NULL,
    "abstract" text NOT NULL,
    "description" character varying(255) NOT NULL,
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "articles_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "articles" ("id", "title", "user_id", "publisher_id", "journal_id", "abstract", "description", "created_at", "updated_at") VALUES
(1,	'Dr.',	18,	1,	26,	'Quod ut quibusdam nisi facilis sit blanditiis modi. Omnis sint est et velit inventore. Mollitia nemo in aut sequi qui dolorem id. Nihil ut ab soluta. Fugit ad nam modi in ullam.',	'A ducimus ut non quia. Laudantium et nisi autem eaque fugit quae pariatur eveniet.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(2,	'Prof.',	13,	43,	2,	'Eveniet aut earum itaque ea. Sint consequuntur iste ipsa maxime est laudantium voluptas. Ab dignissimos est reiciendis architecto quo. Dolore voluptatum vitae impedit velit est veritatis dolore.',	'Et omnis nobis perspiciatis libero. Nostrum reiciendis quis eaque tenetur perspiciatis.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(3,	'Dr.',	16,	45,	11,	'Tempore illo iste quis est voluptas veniam. Qui enim sint magnam sed nesciunt ut. Distinctio rerum et quasi consectetur. Distinctio neque recusandae necessitatibus dignissimos ab.',	'Quidem voluptas in rerum aperiam qui enim alias. Reiciendis rerum maiores neque rem.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(4,	'Dr.',	10,	16,	18,	'Dolorem et aut a ut doloribus. Molestiae dolores sed est necessitatibus. Ullam non commodi rerum quos et consequuntur voluptas.',	'Error sunt at et alias sint aliquid est. Suscipit aperiam ut voluptatem id.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(5,	'Mr.',	8,	28,	5,	'Voluptas doloremque aut error officiis natus mollitia ea. Aut sed consequatur excepturi blanditiis incidunt quo. Nobis accusantium repellat quaerat eos quasi debitis.',	'Enim dolor id voluptatem at et magni. Odio soluta similique non. Et at iusto adipisci a enim iusto.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(6,	'Prof.',	4,	18,	7,	'Quo qui et ipsa ea dolorem esse. Et aperiam voluptates expedita rerum. Rerum temporibus et nemo. Deleniti magni doloremque vero rerum temporibus tenetur.',	'Rerum consequatur quasi qui excepturi iure. Voluptatibus nihil enim est quis.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(7,	'Prof.',	10,	7,	49,	'Consectetur officiis itaque soluta et doloremque. Ducimus soluta odio qui. Impedit corporis enim et.',	'Vitae aut ex corporis. Laborum animi est mollitia iusto iure. Non omnis eos qui.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(8,	'Dr.',	6,	18,	9,	'Dolor eum laudantium quaerat sit et reprehenderit. Est ratione quam rerum optio ratione.',	'Consequuntur odit mollitia sunt nemo. Voluptate sed optio voluptatem incidunt. Est voluptas cum ad.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(9,	'Prof.',	4,	47,	2,	'Qui natus earum non. Pariatur repellat sunt molestiae dolor eos accusantium debitis aliquam. Ex sit aspernatur dolorem eos. Delectus omnis laudantium aliquam ipsa officiis.',	'Ullam soluta eum sunt atque nostrum. Blanditiis iure et saepe.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(10,	'Dr.',	12,	1,	8,	'Ab reprehenderit qui atque. Qui saepe aut dicta praesentium sint reiciendis. Et ut atque fugiat explicabo neque. Cumque ipsam accusantium veritatis sunt eos.',	'Sed facere quia occaecati velit. Fugiat numquam eos veritatis. Tenetur ut quis ducimus.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(11,	'Mr.',	15,	22,	28,	'Aut quam qui quos. Animi possimus minima explicabo modi. Atque ducimus et sit repudiandae voluptatem molestias doloremque ratione.',	'Quisquam assumenda eligendi est sunt facere. Omnis incidunt expedita corporis facilis.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(12,	'Dr.',	9,	40,	48,	'Voluptas sunt accusantium veritatis qui aut. Sint commodi culpa quae doloribus mollitia qui harum. Reiciendis aperiam sunt a ratione repellat molestias.',	'Iure nulla velit mollitia culpa cupiditate atque. Reprehenderit excepturi eos pariatur quam.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(13,	'Prof.',	19,	1,	21,	'Id nobis nihil et delectus. Velit qui aut qui est labore voluptas. At exercitationem alias rerum non reiciendis ipsa voluptas.',	'Aliquid dolore qui deserunt. Harum odit tempora aspernatur ut. Esse quia et explicabo repellat.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(14,	'Prof.',	17,	34,	24,	'Eius ratione ex non vitae occaecati. Qui dicta ex quam sunt ex. Harum nihil maiores aut neque ut. Eius sapiente enim vel quod modi. Eveniet earum ab sit voluptates necessitatibus doloremque.',	'Porro maxime magnam vel. Voluptatem officia qui laudantium. Culpa dolor vitae repellat minus.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(15,	'Mr.',	5,	32,	9,	'Aut dolorum dolorem commodi est. Omnis velit praesentium fugiat et. Eum porro esse enim.',	'Sequi sit voluptatem saepe. Quidem qui suscipit corporis. Error qui autem accusamus error maxime.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(16,	'Prof.',	4,	23,	21,	'Quo quisquam id iure id velit vitae consequatur sapiente. Totam necessitatibus maiores sit dolor impedit et.',	'Error magnam ipsa odit quis. Est est ut qui error. Molestias et et nostrum at et.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(17,	'Prof.',	3,	19,	44,	'Exercitationem laborum eum quos dolores corporis eos et. Eos quisquam vitae debitis est omnis. Dolorum nihil voluptate sit omnis.',	'Ut nihil porro sunt saepe saepe ex vitae. Deleniti explicabo et sunt explicabo voluptatem et.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(18,	'Dr.',	20,	1,	38,	'Ut nulla similique est sit et ut aliquam. Suscipit adipisci quo consequatur expedita aut accusantium et. Tempore vero voluptatem assumenda aut qui neque et.',	'Magnam cumque neque quis aut dolor. Doloremque voluptatibus quia debitis dolorem in alias.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(19,	'Prof.',	8,	13,	34,	'Est vitae dolorem non. Blanditiis amet eaque cum dicta autem commodi. Et vitae qui qui ab et. Quae vero atque qui quia placeat. Tenetur et autem quia eaque doloribus rem consectetur.',	'Omnis sequi dolores et dolor. Eaque iste adipisci nostrum est atque.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(20,	'Mr.',	20,	31,	14,	'Nobis vitae nesciunt quia minima impedit magnam. Quo aut omnis et omnis quia neque et. Et possimus id corrupti quos.',	'Deserunt assumenda et et non soluta. Omnis occaecati assumenda illum. Fugiat molestias placeat sit.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(21,	'Ms.',	3,	10,	12,	'Nihil ut amet fugiat possimus velit voluptatem. Qui et est nemo necessitatibus voluptatem rerum. Tempore nam sit ut rem inventore et voluptatem. Quis et non quasi quam repudiandae ut.',	'Quibusdam dolor asperiores debitis suscipit. Rerum occaecati tempora quo dolor aut.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(22,	'Mr.',	16,	48,	36,	'Odit deleniti atque aut voluptas. Fuga enim in facere nulla commodi. Laborum ad maiores quas.',	'Aut eos sapiente natus sint. Soluta unde enim adipisci aut in. Nemo voluptates vel fugit ipsa.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(23,	'Prof.',	16,	25,	16,	'Voluptatum laborum necessitatibus magnam cumque quo et blanditiis. Aliquid dignissimos nesciunt ullam esse. Repudiandae quia iusto ut iusto. Sit voluptatem quo nulla quis voluptas rerum.',	'Quibusdam rerum occaecati placeat id qui. Ut nostrum et iste omnis assumenda.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(24,	'Dr.',	9,	47,	33,	'Doloribus quam occaecati amet doloribus ullam. Corrupti consequuntur magni minima perferendis impedit aliquid id. Repellat nam et eos veritatis dignissimos.',	'Nihil similique in ab enim. Optio molestiae aperiam eos odio velit quo sapiente.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(25,	'Mr.',	12,	29,	41,	'Quibusdam veniam cum vero ducimus facere doloribus illo. Eius temporibus minima fugiat voluptatem corrupti et nemo. Odio quos odio quos ut et. Sapiente fuga rem ut.',	'Commodi id pariatur expedita et quis. Repellat quasi quo sapiente sint. Sint vel sed ad.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(26,	'Ms.',	13,	28,	42,	'Eum ut autem et consequatur cum mollitia eligendi autem. Velit a placeat saepe fugiat. Sint voluptates sequi amet qui dolor. Velit beatae voluptatem dolor vel ipsam sunt.',	'Sunt vel quisquam aut. Esse earum cumque eligendi neque. Aliquam ipsa veritatis veritatis quia.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(27,	'Mrs.',	13,	37,	3,	'Animi voluptate sed qui. Perferendis nobis qui recusandae neque aut. Vel ab eligendi enim qui dolor aut similique vel. Sunt repudiandae est non voluptatem quae occaecati ut.',	'Et iure aperiam eum consequatur. Possimus totam molestiae quidem dolor facere voluptate iusto.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(28,	'Prof.',	11,	46,	30,	'Est aut sit expedita ducimus. Et beatae autem modi similique debitis. Ea ut vero ut. Quo voluptatibus odio repellendus rem alias quia nisi. Amet placeat laudantium saepe ex repudiandae quia quas.',	'Modi quo impedit ut eveniet porro non architecto. Dolores nobis quis occaecati distinctio.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(29,	'Mr.',	8,	10,	30,	'Deserunt enim et qui. Aliquid sunt ipsum sit. Quo dolores ad consequuntur voluptas quisquam minus expedita.',	'Ex saepe praesentium aut dolorem eligendi et rerum ab. Accusantium et molestias perferendis et.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(30,	'Mrs.',	6,	8,	37,	'Pariatur voluptas enim ex molestias. Ut veniam maiores ut aut. Aut eligendi suscipit esse consequatur ut minus in soluta.',	'Est sint unde unde tenetur. Quo fugiat minus illo distinctio doloribus.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(31,	'Prof.',	11,	48,	26,	'Et aspernatur qui quisquam temporibus facere sint quod. Aliquam nesciunt quasi dicta. Vel at aliquam non veniam a qui. Facere saepe non error quas. Et accusantium neque quo totam.',	'Impedit omnis et est eum ut. Ducimus et consectetur quibusdam.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(32,	'Miss',	9,	42,	42,	'Sit aliquam repudiandae odit at aut. Est neque exercitationem laudantium ullam velit. Maiores ullam adipisci voluptates ex. Eos sit velit esse ea hic neque.',	'Laudantium nostrum veritatis est et vel. Nam et magnam tempora ratione. Vel sit est quisquam.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(33,	'Mr.',	19,	50,	33,	'Quos ullam est praesentium necessitatibus error nostrum. Cupiditate sed cumque labore. Quae placeat quo nobis aliquid accusantium voluptas nam. Sit ea labore et id neque harum.',	'Velit ea iste provident. Quas quam a repellat cum autem. Enim iste excepturi facere quas.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(34,	'Mr.',	19,	33,	8,	'Officia sit voluptas magni dolore sit. Necessitatibus sit ut magnam quod aut. A ipsum ex incidunt eveniet qui nisi laudantium. Quo suscipit et consequatur.',	'Dolor eum esse aut. Adipisci voluptas culpa necessitatibus explicabo. Enim et vitae atque saepe.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(35,	'Prof.',	9,	36,	26,	'Ut aliquid optio error error sapiente hic ut quibusdam. Quidem quam natus non labore consequuntur temporibus repudiandae voluptatem. Dolorem voluptas iure distinctio qui quae.',	'Fugit quia autem debitis eveniet est eum quam. Animi voluptas magnam non ut.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(36,	'Mr.',	18,	10,	7,	'Placeat aperiam non aut. Pariatur rerum quo hic. Iusto corrupti minima laboriosam mollitia dolorum.',	'Dolor et error omnis. Soluta quasi incidunt voluptatem.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(37,	'Miss',	20,	43,	26,	'Enim qui qui voluptatum voluptate. Repellendus aliquid beatae velit. Eum quas neque qui aut qui sapiente. Ea voluptate alias quos reiciendis quas fugiat incidunt enim.',	'Rerum ullam quasi rerum molestias quo laborum. Facilis consequatur dolorum omnis qui.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(38,	'Prof.',	20,	36,	21,	'Omnis enim facilis laborum qui. Laudantium rem adipisci repellendus neque et impedit.',	'Dolorum non ea nulla amet est. Ex sint omnis est. Ea et et rerum rerum.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(39,	'Mr.',	4,	10,	19,	'Fugiat odio quia ut pariatur rem quis aut omnis. Harum sapiente dicta culpa voluptatem qui est eligendi. Placeat sed error fugit ut placeat voluptatum.',	'Sequi sint aperiam illo saepe ipsum. Et ut veniam accusantium tempore.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(40,	'Miss',	14,	44,	10,	'Voluptas ut laborum vitae cumque modi itaque explicabo pariatur. Atque aut ea quis aspernatur et quod. Qui molestias molestias voluptatum voluptas.',	'Reprehenderit assumenda similique nemo velit eligendi deleniti nulla. Voluptas et voluptatem est.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(41,	'Miss',	2,	33,	28,	'Ducimus magni eum rerum magni eum dicta qui tempora. Magnam explicabo totam doloremque. Voluptas dolores sequi iusto iure odio ut tempore dolore. Enim corporis quasi et eos non quia sit.',	'Sed aliquid at quia amet ipsum. Alias ratione natus laborum quasi. Nam dolorem architecto est est.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(42,	'Mr.',	6,	40,	44,	'Amet modi commodi debitis voluptatem distinctio aut ut. Sed dolores non sunt provident deserunt quo illum rerum. Vel veritatis modi cum.',	'Eius quasi est praesentium mollitia. Odit facere velit illo sed quo facilis. Qui sint rem vero.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(43,	'Prof.',	12,	1,	11,	'Eos tenetur accusantium consequatur placeat adipisci quo aut. Aut est commodi accusamus sint nesciunt officia fugit. Aut officiis qui amet molestiae. Unde sit impedit vel necessitatibus commodi.',	'Eligendi rem a optio iste doloribus ullam. Provident magni reiciendis voluptatem eveniet.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(44,	'Mrs.',	7,	10,	14,	'Animi aut repellat nisi nisi quas. Minima expedita velit voluptatum voluptates eaque laborum est neque. Optio consequatur sit ut atque ex rem.',	'Eius id rem rerum laborum quis. Rem non autem officiis officia error ea.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(45,	'Mrs.',	14,	41,	29,	'Minima reprehenderit quia similique esse. Numquam quo quis incidunt nihil ut et. Molestias nemo voluptas est consequatur aut accusamus vel. Odio vitae molestiae tempora reiciendis.',	'Qui reprehenderit qui ratione cumque ut expedita in cum. Atque aspernatur hic atque sed velit quis.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(46,	'Prof.',	9,	2,	48,	'Dolorem consequatur dolores sequi. Labore nam voluptas quis quae modi est. Placeat iste assumenda laudantium sit rerum porro asperiores et.',	'Aut dolorem ut ullam est. Tempora libero rem fuga. Aut est rerum labore dicta maiores ullam magnam.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(47,	'Mr.',	20,	19,	15,	'Est quibusdam unde temporibus assumenda. Voluptas illum vel maxime minima et eos. Autem placeat hic ut consequuntur sed ut.',	'Non facere eos non. Aut veritatis rem sed dignissimos minus. Nobis porro accusamus veritatis odio.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(48,	'Mrs.',	17,	38,	19,	'Beatae possimus vero aut in aut ut. Quia quia reprehenderit ea facere sed. Non ipsam sequi ut ducimus suscipit possimus veritatis. Incidunt esse impedit officia inventore.',	'Tempora assumenda ea occaecati temporibus et. Ducimus fuga autem sequi ex ratione corrupti minus.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(49,	'Ms.',	14,	12,	8,	'Mollitia laborum optio architecto reiciendis iste. Quisquam voluptatem nostrum distinctio eos cupiditate. Omnis ipsum aut quidem id repellat maxime labore.',	'Voluptates ad excepturi quos possimus. Beatae quaerat eos nihil autem.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(50,	'Prof.',	4,	31,	50,	'Incidunt nihil harum eius laudantium cumque. Et ea expedita ducimus. Aut numquam libero quo debitis est. Nihil quaerat delectus sint et cupiditate distinctio.',	'Provident eligendi dolores et minima totam ratione odit. Dolorum earum quo qui.',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34');

DROP TABLE IF EXISTS "failed_jobs";
DROP SEQUENCE IF EXISTS failed_jobs_id_seq;
CREATE SEQUENCE failed_jobs_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."failed_jobs" (
    "id" bigint DEFAULT nextval('failed_jobs_id_seq') NOT NULL,
    "uuid" character varying(255) NOT NULL,
    "connection" text NOT NULL,
    "queue" text NOT NULL,
    "payload" text NOT NULL,
    "exception" text NOT NULL,
    "failed_at" timestamp(0) DEFAULT CURRENT_TIMESTAMP NOT NULL,
    CONSTRAINT "failed_jobs_pkey" PRIMARY KEY ("id"),
    CONSTRAINT "failed_jobs_uuid_unique" UNIQUE ("uuid")
) WITH (oids = false);


DROP TABLE IF EXISTS "fakulties";
DROP SEQUENCE IF EXISTS fakulties_id_seq;
CREATE SEQUENCE fakulties_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."fakulties" (
    "id" bigint DEFAULT nextval('fakulties_id_seq') NOT NULL,
    "name" character varying(255) NOT NULL,
    "publisher_id" bigint NOT NULL,
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "fakulties_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "fakulties" ("id", "name", "publisher_id", "created_at", "updated_at") VALUES
(1,	'nobis',	5,	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(2,	'qui',	40,	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(3,	'at',	11,	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(4,	'molestias',	26,	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(5,	'labore',	47,	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(6,	'omnis',	17,	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(7,	'et',	23,	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(8,	'ducimus',	33,	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(9,	'non',	4,	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(10,	'eaque',	7,	'2023-03-04 06:15:34',	'2023-03-04 06:15:34');

DROP TABLE IF EXISTS "journal_subject";
CREATE TABLE "public"."journal_subject" (
    "subject_id" bigint NOT NULL,
    "journal_id" bigint NOT NULL,
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "journal_subject_pkey" PRIMARY KEY ("subject_id", "journal_id")
) WITH (oids = false);

INSERT INTO "journal_subject" ("subject_id", "journal_id", "created_at", "updated_at") VALUES
(1,	1,	NULL,	NULL),
(2,	1,	NULL,	NULL),
(3,	1,	NULL,	NULL),
(2,	2,	NULL,	NULL),
(7,	2,	NULL,	NULL),
(10,	3,	NULL,	NULL),
(8,	3,	NULL,	NULL),
(1,	4,	NULL,	NULL),
(2,	4,	NULL,	NULL);

DROP TABLE IF EXISTS "journals";
DROP SEQUENCE IF EXISTS journals_id_seq;
CREATE SEQUENCE journals_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."journals" (
    "id" bigint DEFAULT nextval('journals_id_seq') NOT NULL,
    "title" character varying(255) NOT NULL,
    "img" character varying(255) NOT NULL,
    "abstract" character varying(255) NOT NULL,
    "website" character varying(255) NOT NULL,
    "publisher_id" bigint NOT NULL,
    "issn" character varying(255) NOT NULL,
    "eissn" character varying(255),
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "journals_eissn_unique" UNIQUE ("eissn"),
    CONSTRAINT "journals_issn_unique" UNIQUE ("issn"),
    CONSTRAINT "journals_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "journals" ("id", "title", "img", "abstract", "website", "publisher_id", "issn", "eissn", "created_at", "updated_at") VALUES
(1,	'Et nesciunt molestiae itaque.',	'journal.jpg',	'Expedita qui maxime sunt quas et sed eos. Et sit quia atque dicta. Et temporibus amet sint et. Quod labore minus quos sed numquam neque.',	'www.unmuh.com',	38,	'70939',	'2131Q',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(2,	'Tenetur non dolores et.',	'journal.jpg',	'Quo ullam qui illo voluptates fugiat laborum nulla. Illum reiciendis voluptatem optio porro deserunt dolore quo rem. Adipisci aspernatur voluptas ipsa fugit quaerat beatae. Laborum ut ut voluptatem et omnis deserunt.',	'www.unmuh.com',	9,	'56010',	'4124L',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(3,	'Labore quia voluptatibus omnis.',	'journal.jpg',	'Quam ut aut deserunt occaecati. Laudantium quas earum dicta dolorem optio. Nostrum qui ipsum rerum aliquam dolor unde. Ipsum et aut natus tempore. Ut laborum et sint.',	'www.unmuh.com',	49,	'18144',	'4413G',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(4,	'Repudiandae nisi ab.',	'journal.jpg',	'Facilis sit laudantium eius ipsum est odio. Dolorem et voluptatibus occaecati quibusdam quas adipisci fuga ex. Consequatur quos qui ipsa ad eum. Cupiditate vero enim modi. Enim ut eum ut nam autem.',	'www.unmuh.com',	38,	'19996',	'1324J',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(5,	'Corporis minus tempore.',	'journal.jpg',	'Blanditiis qui maiores enim et ipsam quia corporis. Molestias et deleniti cupiditate et illo et sit. Tenetur ad possimus et et facere recusandae. Illum libero non aut autem et id aut. Velit est rerum et suscipit natus sed. Dolore iste ut enim est.',	'www.unmuh.com',	3,	'39985',	'4541T',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(6,	'Error maxime sed.',	'journal.jpg',	'Omnis consequatur veritatis impedit eos. Rerum quia sint aperiam dolorem eos sed ipsa. In et atque quisquam perferendis. Vitae modi tempore distinctio voluptas magnam aut pariatur.',	'www.unmuh.com',	31,	'40470',	'5125Q',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(7,	'Doloremque voluptatum velit expedita.',	'journal.jpg',	'Exercitationem quo provident aut doloribus hic. Nisi sed eveniet doloribus assumenda. Saepe aperiam dolorem magni a earum voluptas fugiat iure.',	'www.unmuh.com',	5,	'22986',	'5523P',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(8,	'Eos id officia.',	'journal.jpg',	'Incidunt suscipit nobis eos voluptas dolorem. Eius voluptas sunt facilis ipsam distinctio qui. Rerum vitae possimus et iste assumenda quo esse. Itaque velit qui sint delectus sunt.',	'www.unmuh.com',	15,	'10645',	'2352F',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(9,	'Illo ut totam ipsa.',	'journal.jpg',	'Eos qui eos aperiam molestias mollitia iure quibusdam. Dolores magnam aspernatur aperiam id. Et laudantium eum id aut velit facilis. Rerum quia sed cumque ut omnis quod. At laboriosam vero accusamus distinctio est doloribus.',	'www.unmuh.com',	42,	'63544',	'2523I',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(10,	'Necessitatibus tenetur excepturi fugit.',	'journal.jpg',	'Est nostrum fugiat quo sit occaecati omnis ut. Corrupti architecto porro necessitatibus velit. Saepe aliquid assumenda reprehenderit cumque molestias ut quia. Voluptatem totam facilis vero ut dolores fugit.',	'www.unmuh.com',	48,	'98828',	'1453K',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(11,	'Provident quia illo.',	'journal.jpg',	'Non non recusandae optio earum sint ut dolore. Eius non ratione asperiores doloribus consectetur. Sunt et laboriosam sed mollitia. Quas non voluptatum corporis recusandae sed quia.',	'www.unmuh.com',	18,	'58630',	'1225R',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(12,	'Necessitatibus consequatur at quo.',	'journal.jpg',	'Vel fuga voluptatem quaerat hic facilis velit. Suscipit culpa numquam est exercitationem quod omnis assumenda. Eum voluptatem facere suscipit. Sit facilis enim praesentium voluptates laborum.',	'www.unmuh.com',	4,	'15981',	'4433T',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(13,	'Sapiente corrupti eum.',	'journal.jpg',	'Et ratione eos earum consequatur. Est repellat doloremque cumque velit iusto eaque error. Voluptate ex eius necessitatibus nesciunt labore necessitatibus dolorum. Voluptatem magni harum aut omnis aliquid sint.',	'www.unmuh.com',	37,	'88805',	'5422Z',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(14,	'Corporis in non perspiciatis.',	'journal.jpg',	'Quia quod quod rerum sit ducimus veniam provident. Ad voluptas explicabo assumenda ratione et dicta et. Laborum dignissimos laudantium temporibus velit consequuntur ducimus sint officiis.',	'www.unmuh.com',	17,	'54395',	'2242J',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(15,	'Expedita enim qui in.',	'journal.jpg',	'Eum velit aut quos est dolore laboriosam recusandae tempora. Voluptas ipsa hic sit dolores sequi. Possimus voluptatem saepe et quis. Qui ut rerum numquam praesentium ut. Qui sed rem quaerat aliquam. Ut consequatur sunt ex laudantium earum.',	'www.unmuh.com',	11,	'94509',	'5541Y',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(16,	'Aliquam sapiente fugiat nulla.',	'journal.jpg',	'Natus facere consequatur quas saepe. Aut magni omnis ut amet est est. Incidunt labore et mollitia esse soluta molestiae adipisci ullam. Pariatur dolorem molestiae est exercitationem id. In atque incidunt iusto.',	'www.unmuh.com',	11,	'54013',	'2535X',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(17,	'In voluptatum eos.',	'journal.jpg',	'Vel itaque id in et. Cupiditate rerum eos corporis cupiditate. Quasi culpa est et sint maxime. Vitae sed sint consectetur expedita. Praesentium laudantium aut voluptatum beatae veniam.',	'www.unmuh.com',	49,	'64703',	'1531G',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(18,	'Perspiciatis ut.',	'journal.jpg',	'Eos et non ea similique aliquam. Et molestiae aut distinctio. Dolores qui quo necessitatibus eum.',	'www.unmuh.com',	19,	'66981',	'1421N',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(19,	'Deleniti ut deleniti adipisci.',	'journal.jpg',	'Ea maiores mollitia doloribus voluptatem dolorum at. Neque quo architecto voluptatem vel minus quisquam tempore pariatur. Accusamus quo est porro sed voluptas aliquam. Corrupti corporis odit modi officiis.',	'www.unmuh.com',	26,	'30362',	'3211V',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(20,	'Praesentium aliquid cumque ut.',	'journal.jpg',	'Quis et quia ut. Voluptatem impedit nisi et repellat sint iste autem. Culpa placeat quae ipsum dolor.',	'www.unmuh.com',	20,	'84386',	'5152M',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(21,	'Rerum soluta quam.',	'journal.jpg',	'Necessitatibus reiciendis accusantium cum. Provident eum quaerat est rerum autem sint et. Reiciendis et dolore facere saepe dicta ut nesciunt. Reprehenderit sunt repudiandae voluptas debitis ut qui.',	'www.unmuh.com',	31,	'55553',	'4445W',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(22,	'Veritatis beatae vel tenetur.',	'journal.jpg',	'Est voluptas dolor voluptatum aliquid. Nulla occaecati et voluptates est laboriosam. Ut maiores voluptatem itaque cum odio quaerat dolor. Soluta voluptate fugiat in magni aliquam ad.',	'www.unmuh.com',	48,	'31824',	'2515Y',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(23,	'Eos ut.',	'journal.jpg',	'Fugit et quo inventore. Veritatis consequatur qui quisquam aut quisquam. Ut ut itaque et odio non qui. Architecto quia beatae id voluptate. Quo exercitationem deserunt voluptate culpa et. Magni reprehenderit iusto enim voluptas.',	'www.unmuh.com',	49,	'41940',	'3252R',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(24,	'Vel qui nostrum.',	'journal.jpg',	'Sit expedita aut quas non. Facilis aut magni veritatis atque dolorem aut iure. Provident nisi blanditiis labore et nisi ex et. Animi facere iure ea aut nulla et inventore tempore.',	'www.unmuh.com',	27,	'98659',	'5313D',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(25,	'Laborum eius iure sit.',	'journal.jpg',	'Minima quis qui laborum aspernatur consequatur. Voluptas aut eaque provident et. Eligendi atque hic dolorem sit cum aut mollitia. Molestias consequuntur natus reiciendis.',	'www.unmuh.com',	25,	'14863',	'1311R',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(26,	'Earum sed velit.',	'journal.jpg',	'Libero ducimus aliquam illum explicabo ducimus labore. Inventore nostrum distinctio iure odit qui qui. Illo sapiente laborum in aspernatur quae.',	'www.unmuh.com',	38,	'74200',	'5422K',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(27,	'Dolorem illum dolorum deleniti a.',	'journal.jpg',	'Velit perspiciatis quaerat sit minima ex impedit. Eveniet voluptatem omnis officia et autem. Nesciunt quisquam nihil velit aspernatur est.',	'www.unmuh.com',	46,	'20105',	'2525T',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(28,	'Laudantium pariatur similique sit.',	'journal.jpg',	'Itaque aliquid maiores blanditiis dignissimos est nam ea ipsam. Reprehenderit illo laborum occaecati magni. Fuga consequatur aut nam temporibus. Dolor sint eum occaecati natus. Est qui debitis natus omnis illo qui itaque.',	'www.unmuh.com',	5,	'86546',	'4522P',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(29,	'Mollitia minima ducimus.',	'journal.jpg',	'Est vel accusamus omnis aut voluptatem dignissimos repudiandae quia. Voluptatem quibusdam omnis quos corrupti. Eos libero omnis nihil laborum rerum eos nihil. Itaque nihil praesentium doloribus ut provident libero.',	'www.unmuh.com',	26,	'98562',	'3512M',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(30,	'Amet dolor mollitia in.',	'journal.jpg',	'Laborum rerum commodi ut dolorem facere numquam labore. Vitae qui facere unde repudiandae quo veniam in. Magni vero ipsa quod eum modi et. Accusamus error eius qui eum.',	'www.unmuh.com',	32,	'85736',	'1355N',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(31,	'Quos dolor perferendis.',	'journal.jpg',	'Deserunt ut est facere eos ut dolores. Ut quasi excepturi sint adipisci exercitationem vitae. Commodi a non placeat sed.',	'www.unmuh.com',	10,	'44349',	'4253U',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(32,	'Accusamus illo est.',	'journal.jpg',	'Autem delectus consequatur ipsa odio. Eaque et nostrum quasi laboriosam alias sequi. Accusantium optio eaque numquam ex accusantium autem. In ipsa voluptas fugit sapiente.',	'www.unmuh.com',	44,	'43935',	'5312A',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(33,	'Est recusandae et.',	'journal.jpg',	'Atque sed laudantium reiciendis non. Sint aut voluptas fugit at quaerat suscipit. Officiis vero nulla natus eaque est. Veritatis cumque est necessitatibus dolores non illo. Cum autem ut rerum odio asperiores.',	'www.unmuh.com',	3,	'42952',	'3215V',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(34,	'Incidunt dolorum dolorem consequuntur.',	'journal.jpg',	'Animi quo omnis est reprehenderit rerum consectetur. Est vero nemo nemo cum. Rerum quia hic velit occaecati laboriosam ut sint. Aut dignissimos nesciunt sit quidem aut unde autem.',	'www.unmuh.com',	41,	'90360',	'2214V',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(35,	'Quia et optio.',	'journal.jpg',	'Quae pariatur provident perferendis animi ex. Magnam laborum eveniet expedita sed voluptas aut deleniti. Rerum eveniet ducimus est sint eaque est nulla vero. Voluptatibus quia cumque distinctio quo inventore et eum.',	'www.unmuh.com',	10,	'36960',	'1121V',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(36,	'Iusto commodi expedita.',	'journal.jpg',	'Veniam autem vel corporis quia ut a. Quam perspiciatis mollitia sed sit fugit delectus accusamus. Officia saepe architecto animi voluptate nemo nobis. Dolorum facilis itaque omnis voluptatum ut. Ut dolor libero eos voluptas quas quibusdam quia.',	'www.unmuh.com',	21,	'74473',	'4451I',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(37,	'Consectetur pariatur tenetur.',	'journal.jpg',	'Illum magnam ea sed unde nisi qui corporis praesentium. Sequi qui voluptate fugit modi quaerat. Qui ea sit ut repellat molestiae harum. Sed perferendis dolores a sed voluptatem deleniti nemo.',	'www.unmuh.com',	28,	'62900',	'5452J',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(38,	'Commodi reprehenderit autem.',	'journal.jpg',	'Praesentium quisquam at porro illum maiores repellat. Ex dicta debitis ipsa omnis veritatis qui tempore. Fugiat non voluptas voluptas vitae et.',	'www.unmuh.com',	21,	'88134',	'4452G',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(39,	'Qui voluptatibus dolor.',	'journal.jpg',	'Qui ullam nulla consequatur incidunt ipsum vel. Ut quasi et quam tempora. Amet excepturi consectetur hic sed accusamus. Dolorum nostrum dolorem sed cum voluptates repellat. Unde quis suscipit voluptatem rerum dicta id voluptatum.',	'www.unmuh.com',	40,	'22564',	'1133I',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(40,	'Dolorem non sunt.',	'journal.jpg',	'Aliquam sit ipsa officia maiores totam porro et nobis. Velit provident saepe error dolores rerum quidem. Voluptas sit voluptatem qui molestias perferendis accusamus natus.',	'www.unmuh.com',	43,	'88132',	'3353U',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(41,	'Tempora iure ducimus.',	'journal.jpg',	'Rerum et quia nesciunt facilis. Ut corrupti aliquid vitae numquam saepe et eius. Id quis atque quia tempore. Dolorem et aliquid qui officia. Tenetur occaecati dolores fugit. Omnis nemo doloribus doloribus. Numquam aliquid aut alias sit qui dicta.',	'www.unmuh.com',	34,	'33945',	'3223I',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(42,	'Voluptas eius temporibus qui.',	'journal.jpg',	'Qui quis accusamus porro quasi aliquid soluta. Et reiciendis doloribus qui quaerat. Molestias eos quidem ut rerum quia molestiae in.',	'www.unmuh.com',	31,	'57207',	'2441C',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(43,	'Quod cum est voluptatibus voluptas.',	'journal.jpg',	'Neque accusantium quod sequi dolores repellendus. Expedita cupiditate aut neque harum inventore iure sed. Quia sint ipsa nemo ad incidunt molestiae quibusdam nemo. Delectus consequuntur ipsa qui assumenda consectetur.',	'www.unmuh.com',	14,	'92977',	'2221N',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(44,	'Sit dolores alias repellat exercitationem.',	'journal.jpg',	'Quae in magni iure ut. Id alias quam tempora rerum debitis nesciunt non. Explicabo sed sit quia sit. Et eos magni veniam enim.',	'www.unmuh.com',	29,	'38108',	'3555Q',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(45,	'Saepe est consectetur dolores sint.',	'journal.jpg',	'Magnam quia fugiat blanditiis sint. Quo unde repellendus illo voluptatem. Ad dignissimos odit quia doloremque doloribus facere officia.',	'www.unmuh.com',	26,	'65579',	'5432K',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(46,	'Culpa aliquam beatae et.',	'journal.jpg',	'Illum beatae perspiciatis nulla ipsam et et veniam vel. Sunt ab vel quod nisi ex sunt et. Accusantium et exercitationem qui ab et minus occaecati. Qui ipsam culpa accusantium.',	'www.unmuh.com',	49,	'36717',	'5412T',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(47,	'Sit labore ut labore.',	'journal.jpg',	'Aliquid rem totam doloremque eos cumque quod ipsam. Quo repudiandae vel voluptatem eveniet consequatur accusantium rerum fugit. Ipsam nihil totam repudiandae dolor rerum consectetur.',	'www.unmuh.com',	29,	'41123',	'2313Q',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(48,	'Eos aspernatur similique aliquam.',	'journal.jpg',	'Ut optio tempora et dolores ipsam nam praesentium. Laboriosam molestiae est vitae atque quis laudantium. Odit voluptatem placeat voluptas numquam. Consectetur amet est natus commodi. Animi laboriosam ut corporis.',	'www.unmuh.com',	47,	'12147',	'4414H',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(49,	'Explicabo inventore quia.',	'journal.jpg',	'Vel molestiae inventore veniam doloribus exercitationem sed magnam. Corporis facilis magnam vel fugit. Fugit sed dolor quia est est.',	'www.unmuh.com',	29,	'25737',	'2451P',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(50,	'Delectus ut.',	'journal.jpg',	'Placeat beatae autem dolorem aut alias et. Dolore fugiat quae temporibus. Voluptas fugiat amet voluptatem voluptas. Ratione et qui in. Voluptas porro alias dignissimos nam animi.',	'www.unmuh.com',	13,	'73991',	'4424F',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35');

DROP TABLE IF EXISTS "majors";
DROP SEQUENCE IF EXISTS majors_id_seq;
CREATE SEQUENCE majors_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."majors" (
    "id" bigint DEFAULT nextval('majors_id_seq') NOT NULL,
    "name" character varying(255) NOT NULL,
    "publisher_id" bigint NOT NULL,
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "majors_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "majors" ("id", "name", "publisher_id", "created_at", "updated_at") VALUES
(1,	'eum',	49,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(2,	'nihil',	46,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(3,	'placeat',	2,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(4,	'impedit',	33,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(5,	'rerum',	17,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(6,	'sed',	20,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(7,	'officia',	27,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(8,	'natus',	42,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(9,	'minus',	49,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(10,	'officiis',	12,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(11,	'ullam',	21,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(12,	'quam',	28,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(13,	'rem',	26,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(14,	'porro',	12,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(15,	'totam',	49,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(16,	'temporibus',	30,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(17,	'sunt',	32,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(18,	'quis',	7,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(19,	'aut',	17,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(20,	'similique',	48,	'2023-03-04 06:15:35',	'2023-03-04 06:15:35');

DROP TABLE IF EXISTS "migrations";
DROP SEQUENCE IF EXISTS migrations_id_seq;
CREATE SEQUENCE migrations_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 2147483647 CACHE 1;

CREATE TABLE "public"."migrations" (
    "id" integer DEFAULT nextval('migrations_id_seq') NOT NULL,
    "migration" character varying(255) NOT NULL,
    "batch" integer NOT NULL,
    CONSTRAINT "migrations_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "migrations" ("id", "migration", "batch") VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_reset_tokens_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(5,	'2023_03_03_025850_create_publishers_table',	1),
(6,	'2023_03_03_030856_create_fakulties_table',	1),
(7,	'2023_03_03_030907_create_majors_table',	1),
(8,	'2023_03_03_030930_create_journals_table',	1),
(9,	'2023_03_03_030938_create_articles_table',	1),
(10,	'2023_03_03_030949_create_subjects_table',	1),
(11,	'2023_03_03_030955_create_roles_table',	1),
(12,	'2023_03_04_031006_create_journal_subject_table',	1);

DROP TABLE IF EXISTS "password_reset_tokens";
CREATE TABLE "public"."password_reset_tokens" (
    "email" character varying(255) NOT NULL,
    "token" character varying(255) NOT NULL,
    "created_at" timestamp(0),
    CONSTRAINT "password_reset_tokens_pkey" PRIMARY KEY ("email")
) WITH (oids = false);


DROP TABLE IF EXISTS "personal_access_tokens";
DROP SEQUENCE IF EXISTS personal_access_tokens_id_seq;
CREATE SEQUENCE personal_access_tokens_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."personal_access_tokens" (
    "id" bigint DEFAULT nextval('personal_access_tokens_id_seq') NOT NULL,
    "tokenable_type" character varying(255) NOT NULL,
    "tokenable_id" bigint NOT NULL,
    "name" character varying(255) NOT NULL,
    "token" character varying(64) NOT NULL,
    "abilities" text,
    "last_used_at" timestamp(0),
    "expires_at" timestamp(0),
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "personal_access_tokens_pkey" PRIMARY KEY ("id"),
    CONSTRAINT "personal_access_tokens_token_unique" UNIQUE ("token")
) WITH (oids = false);

CREATE INDEX "personal_access_tokens_tokenable_type_tokenable_id_index" ON "public"."personal_access_tokens" USING btree ("tokenable_type", "tokenable_id");


DROP TABLE IF EXISTS "publishers";
DROP SEQUENCE IF EXISTS publishers_id_seq;
CREATE SEQUENCE publishers_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."publishers" (
    "id" bigint DEFAULT nextval('publishers_id_seq') NOT NULL,
    "name" character varying(255) NOT NULL,
    "img" character varying(255) NOT NULL,
    "alias" character varying(255) NOT NULL,
    "city" character varying(255) NOT NULL,
    "province" character varying(255) NOT NULL,
    "website" character varying(255) NOT NULL,
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "publishers_name_unique" UNIQUE ("name"),
    CONSTRAINT "publishers_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "publishers" ("id", "name", "img", "alias", "city", "province", "website", "created_at", "updated_at") VALUES
(1,	'quae at',	'unmuh.jpg',	'UI',	'Jeanieville',	'Mississippi',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(2,	'et ipsa',	'unmuh.jpg',	'UI',	'East Michelfurt',	'South Dakota',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(3,	'voluptas aut',	'unmuh.jpg',	'UI',	'East Boshire',	'Missouri',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(4,	'voluptas quos',	'unmuh.jpg',	'UI',	'Lakinborough',	'Maine',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(5,	'sed est',	'unmuh.jpg',	'UI',	'West Rae',	'South Carolina',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(6,	'possimus tenetur',	'unmuh.jpg',	'UI',	'Torpview',	'Alaska',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(7,	'sunt natus',	'unmuh.jpg',	'UI',	'Port Anika',	'Virginia',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(8,	'et voluptatem',	'unmuh.jpg',	'UI',	'Wymanhaven',	'Ohio',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(9,	'quo cum',	'unmuh.jpg',	'UI',	'Lake Jazmynchester',	'Washington',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(10,	'tempore molestiae',	'unmuh.jpg',	'UI',	'South Marquisbury',	'Iowa',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(11,	'ut saepe',	'unmuh.jpg',	'UI',	'Eldridgemouth',	'Mississippi',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(12,	'provident eaque',	'unmuh.jpg',	'UI',	'South Deon',	'Pennsylvania',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(13,	'laborum numquam',	'unmuh.jpg',	'UI',	'Nayelichester',	'Michigan',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(14,	'quis omnis',	'unmuh.jpg',	'UI',	'Lake Lavon',	'New York',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(15,	'quis et',	'unmuh.jpg',	'UI',	'Schaeferhaven',	'Delaware',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(16,	'quia aperiam',	'unmuh.jpg',	'UI',	'West Rigobertochester',	'South Dakota',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(17,	'exercitationem reiciendis',	'unmuh.jpg',	'UI',	'Halland',	'Texas',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(18,	'sunt totam',	'unmuh.jpg',	'UI',	'West Lexie',	'Virginia',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(19,	'voluptatum quia',	'unmuh.jpg',	'UI',	'Lorenzofort',	'Utah',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(20,	'corrupti perspiciatis',	'unmuh.jpg',	'UI',	'Karineborough',	'New York',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(21,	'enim quam',	'unmuh.jpg',	'UI',	'Tinaport',	'Florida',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(22,	'sit dolor',	'unmuh.jpg',	'UI',	'Pollichfort',	'South Carolina',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(23,	'similique aut',	'unmuh.jpg',	'UI',	'Creminport',	'District of Columbia',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(24,	'itaque aliquam',	'unmuh.jpg',	'UI',	'Powlowskifort',	'Alabama',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(25,	'quae atque',	'unmuh.jpg',	'UI',	'Garrettborough',	'Virginia',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(26,	'necessitatibus qui',	'unmuh.jpg',	'UI',	'North Victoria',	'Utah',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(27,	'soluta temporibus',	'unmuh.jpg',	'UI',	'Veumview',	'Vermont',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(28,	'sed quas',	'unmuh.jpg',	'UI',	'Twilachester',	'Louisiana',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(29,	'delectus iste',	'unmuh.jpg',	'UI',	'North Eddieport',	'Nevada',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(30,	'quisquam laboriosam',	'unmuh.jpg',	'UI',	'North Izabellafurt',	'Oregon',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(31,	'non qui',	'unmuh.jpg',	'UI',	'Port Fordchester',	'Mississippi',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(32,	'et quia',	'unmuh.jpg',	'UI',	'South Whitney',	'Iowa',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(33,	'aut aut',	'unmuh.jpg',	'UI',	'Luisashire',	'Vermont',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(34,	'ipsa et',	'unmuh.jpg',	'UI',	'Bentonfort',	'Idaho',	'www.unmuh.com',	'2023-03-04 06:15:35',	'2023-03-04 06:15:35'),
(35,	'consequatur ea',	'unmuh.jpg',	'UI',	'West Carol',	'Kansas',	'www.unmuh.com',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(36,	'est tempora',	'unmuh.jpg',	'UI',	'Port Demarcoton',	'Nebraska',	'www.unmuh.com',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(37,	'voluptatem sed',	'unmuh.jpg',	'UI',	'Pasqualestad',	'Minnesota',	'www.unmuh.com',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(38,	'id ratione',	'unmuh.jpg',	'UI',	'Ansleyborough',	'New Jersey',	'www.unmuh.com',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(39,	'ut architecto',	'unmuh.jpg',	'UI',	'New Diana',	'Massachusetts',	'www.unmuh.com',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(40,	'ad eum',	'unmuh.jpg',	'UI',	'Schuppebury',	'Alaska',	'www.unmuh.com',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(41,	'a minima',	'unmuh.jpg',	'UI',	'Mitchellbury',	'Nevada',	'www.unmuh.com',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(42,	'sequi cumque',	'unmuh.jpg',	'UI',	'Robbburgh',	'Tennessee',	'www.unmuh.com',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(43,	'nihil et',	'unmuh.jpg',	'UI',	'Kellyton',	'Connecticut',	'www.unmuh.com',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(44,	'nisi saepe',	'unmuh.jpg',	'UI',	'Port Xavierborough',	'Washington',	'www.unmuh.com',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(45,	'ut tempore',	'unmuh.jpg',	'UI',	'North Chase',	'Rhode Island',	'www.unmuh.com',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(46,	'qui vitae',	'unmuh.jpg',	'UI',	'Rathhaven',	'North Carolina',	'www.unmuh.com',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(47,	'est officiis',	'unmuh.jpg',	'UI',	'Port Kiarrashire',	'Mississippi',	'www.unmuh.com',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(48,	'hic ipsa',	'unmuh.jpg',	'UI',	'Port Reyna',	'New Jersey',	'www.unmuh.com',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(49,	'atque ullam',	'unmuh.jpg',	'UI',	'South Hallefurt',	'North Carolina',	'www.unmuh.com',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(50,	'est provident',	'unmuh.jpg',	'UI',	'West Merlinburgh',	'Mississippi',	'www.unmuh.com',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36');

DROP TABLE IF EXISTS "roles";
DROP SEQUENCE IF EXISTS roles_id_seq;
CREATE SEQUENCE roles_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."roles" (
    "id" bigint DEFAULT nextval('roles_id_seq') NOT NULL,
    "name" character varying(255) NOT NULL,
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "roles_pkey" PRIMARY KEY ("id")
) WITH (oids = false);


DROP TABLE IF EXISTS "subjects";
DROP SEQUENCE IF EXISTS subjects_id_seq;
CREATE SEQUENCE subjects_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."subjects" (
    "id" bigint DEFAULT nextval('subjects_id_seq') NOT NULL,
    "name" character varying(255) NOT NULL,
    "slug" character varying(255) NOT NULL,
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "subjects_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "subjects" ("id", "name", "slug", "created_at", "updated_at") VALUES
(1,	'cum',	'ipsa-unde-quia-dolor-perferendis-ad',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(2,	'iusto',	'illo-sint-sunt-enim-iusto-assumenda-sit',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(3,	'dolorum',	'sed-esse-exercitationem-qui-vitae-commodi-in-laudantium',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(4,	'laboriosam',	'tempora-in-exercitationem-eius-sint-ipsa-tempora',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(5,	'qui',	'eaque-inventore-rerum-quia-tempora',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(6,	'consequatur',	'nam-architecto-magnam-aperiam-sed-non-optio-a',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(7,	'repellendus',	'nisi-nobis-adipisci-et-deleniti-illum-sequi-autem',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(8,	'distinctio',	'nemo-quo-sed-et-voluptate-eius',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(9,	'et',	'asperiores-deleniti-voluptate-nam-quasi',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36'),
(10,	'corrupti',	'autem-cupiditate-dolores-dolores-omnis-unde-eos',	'2023-03-04 06:15:36',	'2023-03-04 06:15:36');

DROP TABLE IF EXISTS "users";
DROP SEQUENCE IF EXISTS users_id_seq;
CREATE SEQUENCE users_id_seq INCREMENT 1 MINVALUE 1 MAXVALUE 9223372036854775807 CACHE 1;

CREATE TABLE "public"."users" (
    "id" bigint DEFAULT nextval('users_id_seq') NOT NULL,
    "name" character varying(255) NOT NULL,
    "email" character varying(255) NOT NULL,
    "password" character varying(255) NOT NULL,
    "publisher_id" bigint NOT NULL,
    "role_id" bigint NOT NULL,
    "is_active" boolean NOT NULL,
    "email_verified_at" timestamp(0),
    "remember_token" character varying(100),
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    CONSTRAINT "users_email_unique" UNIQUE ("email"),
    CONSTRAINT "users_pkey" PRIMARY KEY ("id")
) WITH (oids = false);

INSERT INTO "users" ("id", "name", "email", "password", "publisher_id", "role_id", "is_active", "email_verified_at", "remember_token", "created_at", "updated_at") VALUES
(1,	'Loma Reichert',	'karley.ledner@example.org',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	26,	2,	'f',	'2023-03-04 06:15:33',	'G3E4pFs9xw',	'2023-03-04 06:15:33',	'2023-03-04 06:15:33'),
(2,	'Prof. Lonny Hand PhD',	'gibson.paula@example.com',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	32,	2,	'f',	'2023-03-04 06:15:33',	'KSdHBnRKkc',	'2023-03-04 06:15:33',	'2023-03-04 06:15:33'),
(3,	'Clara Pfannerstill DDS',	'veum.irwin@example.net',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	16,	2,	'f',	'2023-03-04 06:15:33',	'0vQTOEeH1C',	'2023-03-04 06:15:33',	'2023-03-04 06:15:33'),
(4,	'Aniya Hammes DDS',	'hallie27@example.com',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	29,	2,	'f',	'2023-03-04 06:15:33',	'Z4uhakg8nj',	'2023-03-04 06:15:33',	'2023-03-04 06:15:33'),
(5,	'Prof. Edmund Rowe',	'ledner.cicero@example.net',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	47,	2,	'f',	'2023-03-04 06:15:33',	'du3oneqMuB',	'2023-03-04 06:15:33',	'2023-03-04 06:15:33'),
(6,	'Monte Turner',	'dcrist@example.com',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	29,	2,	'f',	'2023-03-04 06:15:33',	'WkvqbhxExq',	'2023-03-04 06:15:33',	'2023-03-04 06:15:33'),
(7,	'Richie Stroman',	'lubowitz.fiona@example.org',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	19,	2,	'f',	'2023-03-04 06:15:33',	'ibo6cE9KLQ',	'2023-03-04 06:15:33',	'2023-03-04 06:15:33'),
(8,	'Bianka Langosh',	'cristopher49@example.net',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	24,	2,	'f',	'2023-03-04 06:15:33',	'EBmhP2HdbE',	'2023-03-04 06:15:33',	'2023-03-04 06:15:33'),
(9,	'Bethany Brown',	'phermann@example.com',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	29,	2,	'f',	'2023-03-04 06:15:33',	'rdsAckKHpB',	'2023-03-04 06:15:33',	'2023-03-04 06:15:33'),
(10,	'Antonette Considine I',	'corkery.winfield@example.com',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	24,	2,	'f',	'2023-03-04 06:15:33',	'PJfu8H1Ltf',	'2023-03-04 06:15:33',	'2023-03-04 06:15:33'),
(11,	'Leila Predovic',	'ruben.schaden@example.net',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	17,	2,	'f',	'2023-03-04 06:15:33',	'jhqV2kZXd0',	'2023-03-04 06:15:33',	'2023-03-04 06:15:33'),
(12,	'Elna Pagac DDS',	'reichel.buddy@example.org',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	33,	2,	'f',	'2023-03-04 06:15:33',	'jQEVDFlzyn',	'2023-03-04 06:15:33',	'2023-03-04 06:15:33'),
(13,	'Prof. Yesenia Bailey',	'morissette.era@example.com',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	29,	2,	'f',	'2023-03-04 06:15:33',	'lwBghrgX6P',	'2023-03-04 06:15:33',	'2023-03-04 06:15:33'),
(14,	'Lonie Cremin',	'ufay@example.org',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	6,	2,	'f',	'2023-03-04 06:15:33',	'vKkaYNV8CJ',	'2023-03-04 06:15:33',	'2023-03-04 06:15:33'),
(15,	'Colleen Carroll MD',	'ulind@example.net',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	32,	2,	'f',	'2023-03-04 06:15:33',	'P5o7pKLtJs',	'2023-03-04 06:15:33',	'2023-03-04 06:15:33'),
(16,	'Prof. Daija Ruecker PhD',	'lenny91@example.net',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	26,	2,	'f',	'2023-03-04 06:15:33',	'Xz441DIe22',	'2023-03-04 06:15:33',	'2023-03-04 06:15:33'),
(17,	'Miss Beryl Konopelski PhD',	'lowe.rosa@example.com',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	14,	2,	'f',	'2023-03-04 06:15:33',	'tWeaJydJPp',	'2023-03-04 06:15:33',	'2023-03-04 06:15:33'),
(18,	'Asia Ondricka I',	'cronin.randy@example.net',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	46,	2,	'f',	'2023-03-04 06:15:33',	'1QnqG1pttu',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(19,	'Prof. Clemens Bruen DVM',	'price.philip@example.com',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	42,	2,	'f',	'2023-03-04 06:15:33',	'N8oRzVWK72',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34'),
(20,	'Hilbert Harvey',	'lessie.thompson@example.net',	'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',	46,	2,	'f',	'2023-03-04 06:15:33',	'FUW7vIWB9B',	'2023-03-04 06:15:34',	'2023-03-04 06:15:34');

ALTER TABLE ONLY "public"."journal_subject" ADD CONSTRAINT "journal_subject_journal_id_foreign" FOREIGN KEY (journal_id) REFERENCES journals(id) ON DELETE CASCADE NOT DEFERRABLE;
ALTER TABLE ONLY "public"."journal_subject" ADD CONSTRAINT "journal_subject_subject_id_foreign" FOREIGN KEY (subject_id) REFERENCES subjects(id) ON DELETE CASCADE NOT DEFERRABLE;

-- 2023-03-05 14:03:49.562352+07
