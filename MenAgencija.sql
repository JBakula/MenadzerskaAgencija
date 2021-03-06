PGDMP     $    :                z           MenadzerskaAgencija    14.2    14.2 V    M           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            N           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            O           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            P           1262    16427    MenadzerskaAgencija    DATABASE     ?   CREATE DATABASE "MenadzerskaAgencija" WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Croatian_Bosnia & Herzegovina.1252';
 %   DROP DATABASE "MenadzerskaAgencija";
                postgres    false            ?            1259    16469    Agencija    TABLE     ?   CREATE TABLE public."Agencija" (
    agencija_id integer NOT NULL,
    "Naziv_agencije" character varying(100),
    "Vlasnik" character varying(150),
    "Email" character varying(100),
    "Kontakt" character varying(100)
);
    DROP TABLE public."Agencija";
       public         heap    postgres    false            Q           0    0    TABLE "Agencija"    ACL     ?   GRANT SELECT ON TABLE public."Agencija" TO "SamoSelect";
GRANT ALL ON TABLE public."Agencija" TO "SvePermisije";
GRANT SELECT ON TABLE public."Agencija" TO "Kombinirano";
          public          postgres    false    220            ?            1259    16468    Agencija_agencija_id_seq    SEQUENCE     ?   ALTER TABLE public."Agencija" ALTER COLUMN agencija_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public."Agencija_agencija_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    220            R           0    0 #   SEQUENCE "Agencija_agencija_id_seq"    ACL     ?   GRANT SELECT ON SEQUENCE public."Agencija_agencija_id_seq" TO "SamoSelect";
GRANT ALL ON SEQUENCE public."Agencija_agencija_id_seq" TO "SvePermisije";
          public          postgres    false    219            ?            1259    16441    Drzava    TABLE     u   CREATE TABLE public."Drzava" (
    drzava_id integer NOT NULL,
    "Naziv_drzave" character varying(100) NOT NULL
);
    DROP TABLE public."Drzava";
       public         heap    postgres    false            S           0    0    TABLE "Drzava"    ACL     ?   GRANT SELECT ON TABLE public."Drzava" TO "SamoSelect";
GRANT ALL ON TABLE public."Drzava" TO "SvePermisije";
GRANT SELECT ON TABLE public."Drzava" TO "Kombinirano";
          public          postgres    false    214            ?            1259    16440    Drzava_drzava_id_seq    SEQUENCE     ?   ALTER TABLE public."Drzava" ALTER COLUMN drzava_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public."Drzava_drzava_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    214            T           0    0    SEQUENCE "Drzava_drzava_id_seq"    ACL     ?   GRANT SELECT ON SEQUENCE public."Drzava_drzava_id_seq" TO "SamoSelect";
GRANT ALL ON SEQUENCE public."Drzava_drzava_id_seq" TO "SvePermisije";
          public          postgres    false    213            ?            1259    16458    Klub    TABLE     ?   CREATE TABLE public."Klub" (
    klub_id integer NOT NULL,
    "Naziv_kluba" character varying(100) NOT NULL,
    liga_fk integer
);
    DROP TABLE public."Klub";
       public         heap    postgres    false            U           0    0    TABLE "Klub"    ACL     ?   GRANT SELECT ON TABLE public."Klub" TO "SamoSelect";
GRANT ALL ON TABLE public."Klub" TO "SvePermisije";
GRANT SELECT ON TABLE public."Klub" TO "Kombinirano";
          public          postgres    false    218            ?            1259    16457    Klub_klub_id_seq    SEQUENCE     ?   ALTER TABLE public."Klub" ALTER COLUMN klub_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public."Klub_klub_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    218            V           0    0    SEQUENCE "Klub_klub_id_seq"    ACL     ?   GRANT SELECT ON SEQUENCE public."Klub_klub_id_seq" TO "SamoSelect";
GRANT ALL ON SEQUENCE public."Klub_klub_id_seq" TO "SvePermisije";
          public          postgres    false    217            ?            1259    16447    Liga    TABLE     ?   CREATE TABLE public."Liga" (
    liga_id integer NOT NULL,
    "Naziv_lige" character varying(100) NOT NULL,
    "Rang" integer NOT NULL,
    drzava_fk integer
);
    DROP TABLE public."Liga";
       public         heap    postgres    false            W           0    0    TABLE "Liga"    ACL     ?   GRANT SELECT ON TABLE public."Liga" TO "SamoSelect";
GRANT ALL ON TABLE public."Liga" TO "SvePermisije";
GRANT SELECT ON TABLE public."Liga" TO "Kombinirano";
          public          postgres    false    216            ?            1259    16446    Liga_liga_id_seq    SEQUENCE     ?   ALTER TABLE public."Liga" ALTER COLUMN liga_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public."Liga_liga_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    216            X           0    0    SEQUENCE "Liga_liga_id_seq"    ACL     ?   GRANT SELECT ON SEQUENCE public."Liga_liga_id_seq" TO "SamoSelect";
GRANT ALL ON SEQUENCE public."Liga_liga_id_seq" TO "SvePermisije";
          public          postgres    false    215            ?            1259    16435    Noga    TABLE     i   CREATE TABLE public."Noga" (
    noga_id integer NOT NULL,
    "Naziv" character varying(50) NOT NULL
);
    DROP TABLE public."Noga";
       public         heap    postgres    false            Y           0    0    TABLE "Noga"    ACL     ?   GRANT SELECT ON TABLE public."Noga" TO "SamoSelect";
GRANT ALL ON TABLE public."Noga" TO "SvePermisije";
GRANT ALL ON TABLE public."Noga" TO "Kombinirano";
          public          postgres    false    212            ?            1259    16434    Noga_noga_id_seq    SEQUENCE     ?   ALTER TABLE public."Noga" ALTER COLUMN noga_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public."Noga_noga_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    212            Z           0    0    SEQUENCE "Noga_noga_id_seq"    ACL     ?   GRANT SELECT ON SEQUENCE public."Noga_noga_id_seq" TO "SamoSelect";
GRANT ALL ON SEQUENCE public."Noga_noga_id_seq" TO "SvePermisije";
GRANT ALL ON SEQUENCE public."Noga_noga_id_seq" TO "Kombinirano";
          public          postgres    false    211            ?            1259    16475 	   Nogometas    TABLE       CREATE TABLE public."Nogometas" (
    nogometas_id integer NOT NULL,
    "Ime" character varying(100),
    "Prezime" character varying(125),
    "Visina" numeric(3,2),
    "Vrijednost" numeric(6,3),
    "Datum_rodjenja" date,
    nacionalnost_fk integer,
    noga_fk integer
);
    DROP TABLE public."Nogometas";
       public         heap    postgres    false            [           0    0    TABLE "Nogometas"    ACL     ?   GRANT SELECT ON TABLE public."Nogometas" TO "SamoSelect";
GRANT ALL ON TABLE public."Nogometas" TO "SvePermisije";
GRANT ALL ON TABLE public."Nogometas" TO "Kombinirano";
          public          postgres    false    222            ?            1259    16474    Nogometas_nogometas_id_seq    SEQUENCE     ?   ALTER TABLE public."Nogometas" ALTER COLUMN nogometas_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public."Nogometas_nogometas_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    222            \           0    0 %   SEQUENCE "Nogometas_nogometas_id_seq"    ACL     ?   GRANT SELECT ON SEQUENCE public."Nogometas_nogometas_id_seq" TO "SamoSelect";
GRANT ALL ON SEQUENCE public."Nogometas_nogometas_id_seq" TO "SvePermisije";
GRANT ALL ON SEQUENCE public."Nogometas_nogometas_id_seq" TO "Kombinirano";
          public          postgres    false    221            ?            1259    16429    Pozicija    TABLE     {   CREATE TABLE public."Pozicija" (
    pozicija_id integer NOT NULL,
    "Naziv_pozicije" character varying(100) NOT NULL
);
    DROP TABLE public."Pozicija";
       public         heap    postgres    false            ]           0    0    TABLE "Pozicija"    ACL     ?   GRANT SELECT ON TABLE public."Pozicija" TO "SamoSelect";
GRANT ALL ON TABLE public."Pozicija" TO "SvePermisije";
GRANT ALL ON TABLE public."Pozicija" TO "Kombinirano";
          public          postgres    false    210            ?            1259    16491    Pozicija_nogometas    TABLE     ?   CREATE TABLE public."Pozicija_nogometas" (
    pozicija_nogometas_id integer NOT NULL,
    pozicija_fk integer,
    nogometas_fk integer
);
 (   DROP TABLE public."Pozicija_nogometas";
       public         heap    postgres    false            ^           0    0    TABLE "Pozicija_nogometas"    ACL     ?   GRANT SELECT ON TABLE public."Pozicija_nogometas" TO "SamoSelect";
GRANT ALL ON TABLE public."Pozicija_nogometas" TO "SvePermisije";
GRANT ALL ON TABLE public."Pozicija_nogometas" TO "Kombinirano";
          public          postgres    false    224            ?            1259    16490 ,   Pozicija_nogometas_pozicija_nogometas_id_seq    SEQUENCE     	  ALTER TABLE public."Pozicija_nogometas" ALTER COLUMN pozicija_nogometas_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public."Pozicija_nogometas_pozicija_nogometas_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    224            _           0    0 7   SEQUENCE "Pozicija_nogometas_pozicija_nogometas_id_seq"    ACL       GRANT SELECT ON SEQUENCE public."Pozicija_nogometas_pozicija_nogometas_id_seq" TO "SamoSelect";
GRANT ALL ON SEQUENCE public."Pozicija_nogometas_pozicija_nogometas_id_seq" TO "SvePermisije";
GRANT ALL ON SEQUENCE public."Pozicija_nogometas_pozicija_nogometas_id_seq" TO "Kombinirano";
          public          postgres    false    223            ?            1259    16428    Pozicija_pozicija_id_seq    SEQUENCE     ?   ALTER TABLE public."Pozicija" ALTER COLUMN pozicija_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public."Pozicija_pozicija_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    210            `           0    0 #   SEQUENCE "Pozicija_pozicija_id_seq"    ACL     ?   GRANT SELECT ON SEQUENCE public."Pozicija_pozicija_id_seq" TO "SamoSelect";
GRANT ALL ON SEQUENCE public."Pozicija_pozicija_id_seq" TO "SvePermisije";
GRANT ALL ON SEQUENCE public."Pozicija_pozicija_id_seq" TO "Kombinirano";
          public          postgres    false    209            ?            1259    16523    Ugovor_nogometas_agencija    TABLE     ?   CREATE TABLE public."Ugovor_nogometas_agencija" (
    ugovor_nogometas_agencija_id integer NOT NULL,
    "Postotak_od_transfera" numeric(5,2),
    "Postotak_od_godisnje_place" numeric(5,2),
    agencija_fk integer,
    nogometas_fk integer
);
 /   DROP TABLE public."Ugovor_nogometas_agencija";
       public         heap    postgres    false            a           0    0 !   TABLE "Ugovor_nogometas_agencija"    ACL     ?   GRANT SELECT ON TABLE public."Ugovor_nogometas_agencija" TO "SamoSelect";
GRANT ALL ON TABLE public."Ugovor_nogometas_agencija" TO "SvePermisije";
GRANT SELECT ON TABLE public."Ugovor_nogometas_agencija" TO "Kombinirano";
          public          postgres    false    228            ?            1259    16522 :   Ugovor_nogometas_agencija_ugovor_nogometas_agencija_id_seq    SEQUENCE     %  ALTER TABLE public."Ugovor_nogometas_agencija" ALTER COLUMN ugovor_nogometas_agencija_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public."Ugovor_nogometas_agencija_ugovor_nogometas_agencija_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    228            b           0    0 E   SEQUENCE "Ugovor_nogometas_agencija_ugovor_nogometas_agencija_id_seq"    ACL     ?   GRANT SELECT ON SEQUENCE public."Ugovor_nogometas_agencija_ugovor_nogometas_agencija_id_seq" TO "SamoSelect";
GRANT ALL ON SEQUENCE public."Ugovor_nogometas_agencija_ugovor_nogometas_agencija_id_seq" TO "SvePermisije";
          public          postgres    false    227            ?            1259    16507    Ugovor_nogometas_klub    TABLE       CREATE TABLE public."Ugovor_nogometas_klub" (
    ugovor_nogometas_klub_id integer NOT NULL,
    "Datum_potpisa" date,
    "Datum_zavrsetka" date,
    "Godisnja_placa" numeric(6,3),
    "Placena_odsteta" numeric(6,3),
    nogometas_fk integer,
    klub_fk integer
);
 +   DROP TABLE public."Ugovor_nogometas_klub";
       public         heap    postgres    false            c           0    0    TABLE "Ugovor_nogometas_klub"    ACL     ?   GRANT SELECT ON TABLE public."Ugovor_nogometas_klub" TO "SamoSelect";
GRANT ALL ON TABLE public."Ugovor_nogometas_klub" TO "SvePermisije";
GRANT SELECT ON TABLE public."Ugovor_nogometas_klub" TO "Kombinirano";
          public          postgres    false    226            ?            1259    16506 2   Ugovor_nogometas_klub_ugovor_nogometas_klub_id_seq    SEQUENCE       ALTER TABLE public."Ugovor_nogometas_klub" ALTER COLUMN ugovor_nogometas_klub_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public."Ugovor_nogometas_klub_ugovor_nogometas_klub_id_seq"
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    226            d           0    0 =   SEQUENCE "Ugovor_nogometas_klub_ugovor_nogometas_klub_id_seq"    ACL     ?   GRANT SELECT ON SEQUENCE public."Ugovor_nogometas_klub_ugovor_nogometas_klub_id_seq" TO "SamoSelect";
GRANT ALL ON SEQUENCE public."Ugovor_nogometas_klub_ugovor_nogometas_klub_id_seq" TO "SvePermisije";
          public          postgres    false    225            ?            1259    16561 !   p_and_p_sport_management_klijenti    VIEW     ?  CREATE VIEW public.p_and_p_sport_management_klijenti AS
 SELECT n."Ime",
    n."Prezime",
    n."Visina",
    n."Vrijednost",
    n."Datum_rodjenja",
    n.nacionalnost_fk,
    n.noga_fk,
    a."Naziv_agencije"
   FROM ((public."Ugovor_nogometas_agencija" una
     JOIN public."Agencija" a ON ((una.agencija_fk = a.agencija_id)))
     JOIN public."Nogometas" n ON ((una.nogometas_fk = n.nogometas_id)))
  WHERE ((a."Naziv_agencije")::text = 'P&P Sport Management S.A.M.'::text);
 4   DROP VIEW public.p_and_p_sport_management_klijenti;
       public          postgres    false    228    220    220    222    222    222    222    222    222    222    222    228            e           0    0 '   TABLE p_and_p_sport_management_klijenti    ACL       GRANT SELECT ON TABLE public.p_and_p_sport_management_klijenti TO "SamoSelect";
GRANT SELECT,INSERT,DELETE,UPDATE ON TABLE public.p_and_p_sport_management_klijenti TO "SvePermisije";
GRANT SELECT,INSERT,DELETE,UPDATE ON TABLE public.p_and_p_sport_management_klijenti TO "Kombinirano";
          public          postgres    false    229            B          0    16469    Agencija 
   TABLE DATA           b   COPY public."Agencija" (agencija_id, "Naziv_agencije", "Vlasnik", "Email", "Kontakt") FROM stdin;
    public          postgres    false    220   ?q       <          0    16441    Drzava 
   TABLE DATA           =   COPY public."Drzava" (drzava_id, "Naziv_drzave") FROM stdin;
    public          postgres    false    214   ?r       @          0    16458    Klub 
   TABLE DATA           A   COPY public."Klub" (klub_id, "Naziv_kluba", liga_fk) FROM stdin;
    public          postgres    false    218   s       >          0    16447    Liga 
   TABLE DATA           J   COPY public."Liga" (liga_id, "Naziv_lige", "Rang", drzava_fk) FROM stdin;
    public          postgres    false    216   ?s       :          0    16435    Noga 
   TABLE DATA           2   COPY public."Noga" (noga_id, "Naziv") FROM stdin;
    public          postgres    false    212   Ct       D          0    16475 	   Nogometas 
   TABLE DATA           ?   COPY public."Nogometas" (nogometas_id, "Ime", "Prezime", "Visina", "Vrijednost", "Datum_rodjenja", nacionalnost_fk, noga_fk) FROM stdin;
    public          postgres    false    222   t       8          0    16429    Pozicija 
   TABLE DATA           C   COPY public."Pozicija" (pozicija_id, "Naziv_pozicije") FROM stdin;
    public          postgres    false    210   ?u       F          0    16491    Pozicija_nogometas 
   TABLE DATA           `   COPY public."Pozicija_nogometas" (pozicija_nogometas_id, pozicija_fk, nogometas_fk) FROM stdin;
    public          postgres    false    224   ev       J          0    16523    Ugovor_nogometas_agencija 
   TABLE DATA           ?   COPY public."Ugovor_nogometas_agencija" (ugovor_nogometas_agencija_id, "Postotak_od_transfera", "Postotak_od_godisnje_place", agencija_fk, nogometas_fk) FROM stdin;
    public          postgres    false    228   ?v       H          0    16507    Ugovor_nogometas_klub 
   TABLE DATA           ?   COPY public."Ugovor_nogometas_klub" (ugovor_nogometas_klub_id, "Datum_potpisa", "Datum_zavrsetka", "Godisnja_placa", "Placena_odsteta", nogometas_fk, klub_fk) FROM stdin;
    public          postgres    false    226   ^w       f           0    0    Agencija_agencija_id_seq    SEQUENCE SET     H   SELECT pg_catalog.setval('public."Agencija_agencija_id_seq"', 9, true);
          public          postgres    false    219            g           0    0    Drzava_drzava_id_seq    SEQUENCE SET     E   SELECT pg_catalog.setval('public."Drzava_drzava_id_seq"', 13, true);
          public          postgres    false    213            h           0    0    Klub_klub_id_seq    SEQUENCE SET     A   SELECT pg_catalog.setval('public."Klub_klub_id_seq"', 12, true);
          public          postgres    false    217            i           0    0    Liga_liga_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public."Liga_liga_id_seq"', 8, true);
          public          postgres    false    215            j           0    0    Noga_noga_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public."Noga_noga_id_seq"', 5, true);
          public          postgres    false    211            k           0    0    Nogometas_nogometas_id_seq    SEQUENCE SET     K   SELECT pg_catalog.setval('public."Nogometas_nogometas_id_seq"', 15, true);
          public          postgres    false    221            l           0    0 ,   Pozicija_nogometas_pozicija_nogometas_id_seq    SEQUENCE SET     ]   SELECT pg_catalog.setval('public."Pozicija_nogometas_pozicija_nogometas_id_seq"', 20, true);
          public          postgres    false    223            m           0    0    Pozicija_pozicija_id_seq    SEQUENCE SET     I   SELECT pg_catalog.setval('public."Pozicija_pozicija_id_seq"', 11, true);
          public          postgres    false    209            n           0    0 :   Ugovor_nogometas_agencija_ugovor_nogometas_agencija_id_seq    SEQUENCE SET     k   SELECT pg_catalog.setval('public."Ugovor_nogometas_agencija_ugovor_nogometas_agencija_id_seq"', 15, true);
          public          postgres    false    227            o           0    0 2   Ugovor_nogometas_klub_ugovor_nogometas_klub_id_seq    SEQUENCE SET     c   SELECT pg_catalog.setval('public."Ugovor_nogometas_klub_ugovor_nogometas_klub_id_seq"', 13, true);
          public          postgres    false    225            ?           2606    16473    Agencija Agencija_pkey 
   CONSTRAINT     a   ALTER TABLE ONLY public."Agencija"
    ADD CONSTRAINT "Agencija_pkey" PRIMARY KEY (agencija_id);
 D   ALTER TABLE ONLY public."Agencija" DROP CONSTRAINT "Agencija_pkey";
       public            postgres    false    220            ?           2606    16445    Drzava Drzava_pkey 
   CONSTRAINT     [   ALTER TABLE ONLY public."Drzava"
    ADD CONSTRAINT "Drzava_pkey" PRIMARY KEY (drzava_id);
 @   ALTER TABLE ONLY public."Drzava" DROP CONSTRAINT "Drzava_pkey";
       public            postgres    false    214            ?           2606    16462    Klub Klub_pkey 
   CONSTRAINT     U   ALTER TABLE ONLY public."Klub"
    ADD CONSTRAINT "Klub_pkey" PRIMARY KEY (klub_id);
 <   ALTER TABLE ONLY public."Klub" DROP CONSTRAINT "Klub_pkey";
       public            postgres    false    218            ?           2606    16451    Liga Liga_pkey 
   CONSTRAINT     U   ALTER TABLE ONLY public."Liga"
    ADD CONSTRAINT "Liga_pkey" PRIMARY KEY (liga_id);
 <   ALTER TABLE ONLY public."Liga" DROP CONSTRAINT "Liga_pkey";
       public            postgres    false    216            ?           2606    16439    Noga Noga_pkey 
   CONSTRAINT     U   ALTER TABLE ONLY public."Noga"
    ADD CONSTRAINT "Noga_pkey" PRIMARY KEY (noga_id);
 <   ALTER TABLE ONLY public."Noga" DROP CONSTRAINT "Noga_pkey";
       public            postgres    false    212            ?           2606    16479    Nogometas Nogometas_pkey 
   CONSTRAINT     d   ALTER TABLE ONLY public."Nogometas"
    ADD CONSTRAINT "Nogometas_pkey" PRIMARY KEY (nogometas_id);
 F   ALTER TABLE ONLY public."Nogometas" DROP CONSTRAINT "Nogometas_pkey";
       public            postgres    false    222            ?           2606    16495 *   Pozicija_nogometas Pozicija_nogometas_pkey 
   CONSTRAINT        ALTER TABLE ONLY public."Pozicija_nogometas"
    ADD CONSTRAINT "Pozicija_nogometas_pkey" PRIMARY KEY (pozicija_nogometas_id);
 X   ALTER TABLE ONLY public."Pozicija_nogometas" DROP CONSTRAINT "Pozicija_nogometas_pkey";
       public            postgres    false    224            ?           2606    16433    Pozicija Pozicija_pkey 
   CONSTRAINT     a   ALTER TABLE ONLY public."Pozicija"
    ADD CONSTRAINT "Pozicija_pkey" PRIMARY KEY (pozicija_id);
 D   ALTER TABLE ONLY public."Pozicija" DROP CONSTRAINT "Pozicija_pkey";
       public            postgres    false    210            ?           2606    16527 8   Ugovor_nogometas_agencija Ugovor_nogometas_agencija_pkey 
   CONSTRAINT     ?   ALTER TABLE ONLY public."Ugovor_nogometas_agencija"
    ADD CONSTRAINT "Ugovor_nogometas_agencija_pkey" PRIMARY KEY (ugovor_nogometas_agencija_id);
 f   ALTER TABLE ONLY public."Ugovor_nogometas_agencija" DROP CONSTRAINT "Ugovor_nogometas_agencija_pkey";
       public            postgres    false    228            ?           2606    16511 0   Ugovor_nogometas_klub Ugovor_nogometas_klub_pkey 
   CONSTRAINT     ?   ALTER TABLE ONLY public."Ugovor_nogometas_klub"
    ADD CONSTRAINT "Ugovor_nogometas_klub_pkey" PRIMARY KEY (ugovor_nogometas_klub_id);
 ^   ALTER TABLE ONLY public."Ugovor_nogometas_klub" DROP CONSTRAINT "Ugovor_nogometas_klub_pkey";
       public            postgres    false    226            ?           2606    24741 :   Ugovor_nogometas_agencija agencija_ugovor_s_nogometasem_fk    FK CONSTRAINT     ?   ALTER TABLE ONLY public."Ugovor_nogometas_agencija"
    ADD CONSTRAINT agencija_ugovor_s_nogometasem_fk FOREIGN KEY (nogometas_fk) REFERENCES public."Nogometas"(nogometas_id) ON DELETE SET NULL;
 f   ALTER TABLE ONLY public."Ugovor_nogometas_agencija" DROP CONSTRAINT agencija_ugovor_s_nogometasem_fk;
       public          postgres    false    222    228    3226            ?           2606    16452    Liga drzava_liga_fk    FK CONSTRAINT     ?   ALTER TABLE ONLY public."Liga"
    ADD CONSTRAINT drzava_liga_fk FOREIGN KEY (drzava_fk) REFERENCES public."Drzava"(drzava_id);
 ?   ALTER TABLE ONLY public."Liga" DROP CONSTRAINT drzava_liga_fk;
       public          postgres    false    216    3218    214            ?           2606    16480    Nogometas drzava_nogometas_fk    FK CONSTRAINT     ?   ALTER TABLE ONLY public."Nogometas"
    ADD CONSTRAINT drzava_nogometas_fk FOREIGN KEY (nacionalnost_fk) REFERENCES public."Drzava"(drzava_id) ON UPDATE CASCADE ON DELETE CASCADE;
 I   ALTER TABLE ONLY public."Nogometas" DROP CONSTRAINT drzava_nogometas_fk;
       public          postgres    false    3218    222    214            ?           2606    16517 3   Ugovor_nogometas_klub klub_ugovor_nogometas_klub_fk    FK CONSTRAINT     ?   ALTER TABLE ONLY public."Ugovor_nogometas_klub"
    ADD CONSTRAINT klub_ugovor_nogometas_klub_fk FOREIGN KEY (klub_fk) REFERENCES public."Klub"(klub_id) ON UPDATE CASCADE ON DELETE CASCADE;
 _   ALTER TABLE ONLY public."Ugovor_nogometas_klub" DROP CONSTRAINT klub_ugovor_nogometas_klub_fk;
       public          postgres    false    226    3222    218            ?           2606    16463    Klub liga_klub_fk    FK CONSTRAINT     ?   ALTER TABLE ONLY public."Klub"
    ADD CONSTRAINT liga_klub_fk FOREIGN KEY (liga_fk) REFERENCES public."Liga"(liga_id) ON DELETE SET NULL;
 =   ALTER TABLE ONLY public."Klub" DROP CONSTRAINT liga_klub_fk;
       public          postgres    false    218    216    3220            ?           2606    16485    Nogometas noga_nogometas_fk    FK CONSTRAINT     ?   ALTER TABLE ONLY public."Nogometas"
    ADD CONSTRAINT noga_nogometas_fk FOREIGN KEY (noga_fk) REFERENCES public."Noga"(noga_id) ON UPDATE CASCADE ON DELETE CASCADE;
 G   ALTER TABLE ONLY public."Nogometas" DROP CONSTRAINT noga_nogometas_fk;
       public          postgres    false    212    222    3216            ?           2606    16501 2   Pozicija_nogometas nogometas_pozicija_nogometas_fk    FK CONSTRAINT     ?   ALTER TABLE ONLY public."Pozicija_nogometas"
    ADD CONSTRAINT nogometas_pozicija_nogometas_fk FOREIGN KEY (nogometas_fk) REFERENCES public."Nogometas"(nogometas_id) ON UPDATE CASCADE ON DELETE CASCADE;
 ^   ALTER TABLE ONLY public."Pozicija_nogometas" DROP CONSTRAINT nogometas_pozicija_nogometas_fk;
       public          postgres    false    3226    224    222            ?           2606    16512 8   Ugovor_nogometas_klub nogometas_ugovor_nogometas_klub_fk    FK CONSTRAINT     ?   ALTER TABLE ONLY public."Ugovor_nogometas_klub"
    ADD CONSTRAINT nogometas_ugovor_nogometas_klub_fk FOREIGN KEY (nogometas_fk) REFERENCES public."Nogometas"(nogometas_id) ON UPDATE CASCADE ON DELETE CASCADE;
 d   ALTER TABLE ONLY public."Ugovor_nogometas_klub" DROP CONSTRAINT nogometas_ugovor_nogometas_klub_fk;
       public          postgres    false    222    3226    226            ?           2606    16528 6   Ugovor_nogometas_agencija nogometas_ugovor_s_agencijom    FK CONSTRAINT     ?   ALTER TABLE ONLY public."Ugovor_nogometas_agencija"
    ADD CONSTRAINT nogometas_ugovor_s_agencijom FOREIGN KEY (nogometas_fk) REFERENCES public."Nogometas"(nogometas_id) ON UPDATE CASCADE ON DELETE CASCADE;
 b   ALTER TABLE ONLY public."Ugovor_nogometas_agencija" DROP CONSTRAINT nogometas_ugovor_s_agencijom;
       public          postgres    false    3226    228    222            ?           2606    16496 1   Pozicija_nogometas pozicija_pozicija_nogometas_fk    FK CONSTRAINT     ?   ALTER TABLE ONLY public."Pozicija_nogometas"
    ADD CONSTRAINT pozicija_pozicija_nogometas_fk FOREIGN KEY (pozicija_fk) REFERENCES public."Pozicija"(pozicija_id) ON UPDATE CASCADE ON DELETE CASCADE;
 ]   ALTER TABLE ONLY public."Pozicija_nogometas" DROP CONSTRAINT pozicija_pozicija_nogometas_fk;
       public          postgres    false    224    3214    210            B   ?   x?]NM?0=??"'/b??Xv?N?8z?%?:"k:????S??????}q?K?i??=?'@?<????E7?G^%P-??Kj?w2?E?Գq?{???|4?7???Z?,?5??-??,?ġ?Z?P??Tn`!?Q???^8@G??Ĥ??$????΍???CZ????????_̯?R?	[2R?      <   ?   x??=
1????aĬߥ+?,bm3HYg?&??w?0z/?????38?'???ԠN??????E??`G????¥L~`Z??8܊??1??Xh?SfQ?C??z!3?>9?LƠ???????Q??3"??-      @   ?   x?ʱ?@??z?)x???B?Fl???W9???#??=???ߏ???g?H???!??~?Y%d??o?6hq?p??6??c??J}?%U8?E??9E?O???;4⟶gTd?h?+?g(?\5??8??s??[EM?? ?+^      >   z   x?=??
?0?g?)n?p??f?`J?k??=?!?p?C߾??n?$!?J?[D@`?I????r???'s??k??l0??ˎ-?Z??-??v(2??!??q7O&?B#,?vK?????8??????D$?      :   ,   x?3????J-K?2?LI-?K?2??O?J?2???? b???? ?
?      D   U  x?U?Mn?0??/???b'N?%?ZA?Caȏ?$??=V?q ??F????y?,?2??`i??l ?<A?(?nHL]w?VT6|?I?(???f Ƃ
r??`F?6???p??{5?9D?`?TT?X?s?YK?ODf6??j̭i?a?F/?J?0{[????3?ac??J,?x?yu??z?2?_?*?o_????S????HpA1????J??ڙ???z??3??)nێ??]?ˇ?gi?j?-?BzZ`?pL?6??w6???8?G????O??Q?M2!G0{?>Wcn????wS?ڋf	7?Q2?W3?;???lE?<??w5rD?RH?P??va?????      8   q   x?]?A?0??W?H??/\uP??Fn?C_O?
	q??&???Ȋ#M???q????yHFK?L??y?Ⱥ???*??q????\~ܕ,?߯۫?dO?pۺ??Va??? | ?r1?      F   Z   x???? ??a?$j?]???H9˖)?h׎MSo?M^?䝭=?a???$s??Ҏ]???v????!??????%?????2??      J      x?E??!?V1?e??????L?a???5???M??q?< ?/X-??c?s?d??n?c?ِ'x???=?LA?????%?G~???E?ȋfS?^???k?>???ؽ??????uqv
??aE%W      H   ?   x?u??!?C/g|?r??q??zq???I?A*???O?!?K	M?-v??:????:?ZfP?-??Iu?B6"????t?.?\]gL?8?Um"e?L??KQ?3????똳????>ǭ??ַ!?WԬ??.?,?պSg?4ړ?/iPa? ??/;?7e?????~rV?1?*A????????(Z?     