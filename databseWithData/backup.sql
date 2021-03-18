PGDMP         .                y            platform    13.1    13.1 (    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16405    platform    DATABASE     d   CREATE DATABASE platform WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_India.1252';
    DROP DATABASE platform;
                postgres    false            �            1259    16437    admin    TABLE     �   CREATE TABLE public.admin (
    id integer NOT NULL,
    first_name character varying(250),
    last_name character varying(250),
    email character varying(250) NOT NULL,
    password character varying(250),
    mobile_no bigint
);
    DROP TABLE public.admin;
       public         heap    postgres    false            �            1259    16435    admin_id_seq    SEQUENCE     �   CREATE SEQUENCE public.admin_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.admin_id_seq;
       public          postgres    false    201            �           0    0    admin_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.admin_id_seq OWNED BY public.admin.id;
          public          postgres    false    200            �            1259    17063    cart    TABLE     n   CREATE TABLE public.cart (
    course_id bigint NOT NULL,
    emailaddress character varying(250) NOT NULL
);
    DROP TABLE public.cart;
       public         heap    postgres    false            �            1259    16910    cmhauser    TABLE     �  CREATE TABLE public.cmhauser (
    firstname character varying(50),
    middlename character varying(50),
    lastname character varying(50),
    emailaddress character varying(50) NOT NULL,
    phonenumber character varying(12),
    dateofbirth date,
    city character varying(25),
    province character varying(25),
    gender character varying(25),
    ethnicity character varying(25),
    indigenousidentity character varying(25),
    culturalconsiderations character varying(100),
    languagespoken character varying(25),
    housingstatus character varying(25),
    livingarrangement character varying(25),
    sourceofincome character varying(25),
    occupation character varying(25),
    username character varying(50) NOT NULL,
    password character varying(50) NOT NULL,
    registrationdate timestamp with time zone DEFAULT CURRENT_TIMESTAMP,
    lastlogin timestamp with time zone DEFAULT CURRENT_TIMESTAMP,
    cmhauserid bigint NOT NULL
);
    DROP TABLE public.cmhauser;
       public         heap    postgres    false            �            1259    16930    cmhauser_cmhauserid_seq    SEQUENCE     �   ALTER TABLE public.cmhauser ALTER COLUMN cmhauserid ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.cmhauser_cmhauserid_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    202            �            1259    17014    courses    TABLE     F  CREATE TABLE public.courses (
    course_name character varying(250),
    owner_email character varying(250),
    course_id bigint NOT NULL,
    course_data character varying(250),
    description character varying(1000),
    start_date date,
    end_date date,
    capacity bigint,
    currently_enrolled bigint DEFAULT 0
);
    DROP TABLE public.courses;
       public         heap    postgres    false            �            1259    17012    courses_course_id_seq1    SEQUENCE     �   ALTER TABLE public.courses ALTER COLUMN course_id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.courses_course_id_seq1
    START WITH 101
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    210            �            1259    16959    enroll    TABLE     �   CREATE TABLE public.enroll (
    course_id bigint NOT NULL,
    emailaddress character varying(250) NOT NULL,
    completed boolean DEFAULT false,
    certificate character varying(250),
    certificate_generated boolean DEFAULT false
);
    DROP TABLE public.enroll;
       public         heap    postgres    false            �            1259    16983    messages    TABLE     �   CREATE TABLE public.messages (
    sno bigint NOT NULL,
    name character varying(250),
    email character varying(250),
    message character varying(1000)
);
    DROP TABLE public.messages;
       public         heap    postgres    false            �            1259    16981    messages_sno_seq    SEQUENCE     �   ALTER TABLE public.messages ALTER COLUMN sno ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.messages_sno_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    206            �            1259    16991 	   sub_admin    TABLE     �   CREATE TABLE public.sub_admin (
    id bigint NOT NULL,
    email character varying(250) NOT NULL,
    first_name character varying(250),
    last_name character varying(250),
    mobile_no character varying(250),
    password character varying(250)
);
    DROP TABLE public.sub_admin;
       public         heap    postgres    false            �            1259    16994    sub_admin_id_seq    SEQUENCE     �   ALTER TABLE public.sub_admin ALTER COLUMN id ADD GENERATED ALWAYS AS IDENTITY (
    SEQUENCE NAME public.sub_admin_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1
);
            public          postgres    false    207            H           2604    16440    admin id    DEFAULT     d   ALTER TABLE ONLY public.admin ALTER COLUMN id SET DEFAULT nextval('public.admin_id_seq'::regclass);
 7   ALTER TABLE public.admin ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    201    200    201            �          0    16437    admin 
   TABLE DATA           V   COPY public.admin (id, first_name, last_name, email, password, mobile_no) FROM stdin;
    public          postgres    false    201   +2       �          0    17063    cart 
   TABLE DATA           7   COPY public.cart (course_id, emailaddress) FROM stdin;
    public          postgres    false    211   �2       �          0    16910    cmhauser 
   TABLE DATA           E  COPY public.cmhauser (firstname, middlename, lastname, emailaddress, phonenumber, dateofbirth, city, province, gender, ethnicity, indigenousidentity, culturalconsiderations, languagespoken, housingstatus, livingarrangement, sourceofincome, occupation, username, password, registrationdate, lastlogin, cmhauserid) FROM stdin;
    public          postgres    false    202   �2       �          0    17014    courses 
   TABLE DATA           �   COPY public.courses (course_name, owner_email, course_id, course_data, description, start_date, end_date, capacity, currently_enrolled) FROM stdin;
    public          postgres    false    210   �2       �          0    16959    enroll 
   TABLE DATA           h   COPY public.enroll (course_id, emailaddress, completed, certificate, certificate_generated) FROM stdin;
    public          postgres    false    204   �2       �          0    16983    messages 
   TABLE DATA           =   COPY public.messages (sno, name, email, message) FROM stdin;
    public          postgres    false    206   �2       �          0    16991 	   sub_admin 
   TABLE DATA           Z   COPY public.sub_admin (id, email, first_name, last_name, mobile_no, password) FROM stdin;
    public          postgres    false    207   3       �           0    0    admin_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.admin_id_seq', 4, true);
          public          postgres    false    200            �           0    0    cmhauser_cmhauserid_seq    SEQUENCE SET     F   SELECT pg_catalog.setval('public.cmhauser_cmhauserid_seq', 11, true);
          public          postgres    false    203            �           0    0    courses_course_id_seq1    SEQUENCE SET     F   SELECT pg_catalog.setval('public.courses_course_id_seq1', 111, true);
          public          postgres    false    209            �           0    0    messages_sno_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.messages_sno_seq', 5, true);
          public          postgres    false    205            �           0    0    sub_admin_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.sub_admin_id_seq', 3, true);
          public          postgres    false    208            O           2606    16450    admin admin_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY public.admin
    ADD CONSTRAINT admin_pkey PRIMARY KEY (email);
 :   ALTER TABLE ONLY public.admin DROP CONSTRAINT admin_pkey;
       public            postgres    false    201            [           2606    17077    cart cart_pkey 
   CONSTRAINT     a   ALTER TABLE ONLY public.cart
    ADD CONSTRAINT cart_pkey PRIMARY KEY (course_id, emailaddress);
 8   ALTER TABLE ONLY public.cart DROP CONSTRAINT cart_pkey;
       public            postgres    false    211    211            Q           2606    16958    cmhauser cmhauser_pkey 
   CONSTRAINT     ^   ALTER TABLE ONLY public.cmhauser
    ADD CONSTRAINT cmhauser_pkey PRIMARY KEY (emailaddress);
 @   ALTER TABLE ONLY public.cmhauser DROP CONSTRAINT cmhauser_pkey;
       public            postgres    false    202            Y           2606    17021    courses courses_pkey1 
   CONSTRAINT     Z   ALTER TABLE ONLY public.courses
    ADD CONSTRAINT courses_pkey1 PRIMARY KEY (course_id);
 ?   ALTER TABLE ONLY public.courses DROP CONSTRAINT courses_pkey1;
       public            postgres    false    210            S           2606    16963    enroll enroll_pkey 
   CONSTRAINT     e   ALTER TABLE ONLY public.enroll
    ADD CONSTRAINT enroll_pkey PRIMARY KEY (course_id, emailaddress);
 <   ALTER TABLE ONLY public.enroll DROP CONSTRAINT enroll_pkey;
       public            postgres    false    204    204            U           2606    16987    messages messages_pkey 
   CONSTRAINT     U   ALTER TABLE ONLY public.messages
    ADD CONSTRAINT messages_pkey PRIMARY KEY (sno);
 @   ALTER TABLE ONLY public.messages DROP CONSTRAINT messages_pkey;
       public            postgres    false    206            W           2606    17003    sub_admin sub_admin_pkey 
   CONSTRAINT     Y   ALTER TABLE ONLY public.sub_admin
    ADD CONSTRAINT sub_admin_pkey PRIMARY KEY (email);
 B   ALTER TABLE ONLY public.sub_admin DROP CONSTRAINT sub_admin_pkey;
       public            postgres    false    207            ^           2606    17078     courses courses_owner_email_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.courses
    ADD CONSTRAINT courses_owner_email_fkey FOREIGN KEY (owner_email) REFERENCES public.sub_admin(email) ON UPDATE CASCADE ON DELETE CASCADE;
 J   ALTER TABLE ONLY public.courses DROP CONSTRAINT courses_owner_email_fkey;
       public          postgres    false    207    2903    210            ]           2606    17083    enroll enroll_course_id_fkey1    FK CONSTRAINT     �   ALTER TABLE ONLY public.enroll
    ADD CONSTRAINT enroll_course_id_fkey1 FOREIGN KEY (course_id) REFERENCES public.courses(course_id) ON UPDATE CASCADE ON DELETE CASCADE;
 G   ALTER TABLE ONLY public.enroll DROP CONSTRAINT enroll_course_id_fkey1;
       public          postgres    false    2905    204    210            \           2606    17052    enroll enroll_emailaddress_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.enroll
    ADD CONSTRAINT enroll_emailaddress_fkey FOREIGN KEY (emailaddress) REFERENCES public.cmhauser(emailaddress) ON UPDATE SET NULL;
 I   ALTER TABLE ONLY public.enroll DROP CONSTRAINT enroll_emailaddress_fkey;
       public          postgres    false    202    2897    204            �   K   x�M�1�  ��>���l>ĥ4$V���z�Q�����_���z��f�TQ�jd�4Ui���C���� ֥�      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �      �      x������ � �     