PGDMP     /                    y            db_post    13.2    13.2     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    18551    db_post    DATABASE     d   CREATE DATABASE db_post WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Russian_Russia.1251';
    DROP DATABASE db_post;
                postgres    false            �            1259    18554    posts    TABLE     �   CREATE TABLE public.posts (
    id integer NOT NULL,
    title character varying NOT NULL,
    content text NOT NULL,
    date date NOT NULL
);
    DROP TABLE public.posts;
       public         heap    postgres    false            �            1259    18552    posts_id_seq    SEQUENCE     �   CREATE SEQUENCE public.posts_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.posts_id_seq;
       public          postgres    false    201            �           0    0    posts_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.posts_id_seq OWNED BY public.posts.id;
          public          postgres    false    200            #           2604    18557    posts id    DEFAULT     d   ALTER TABLE ONLY public.posts ALTER COLUMN id SET DEFAULT nextval('public.posts_id_seq'::regclass);
 7   ALTER TABLE public.posts ALTER COLUMN id DROP DEFAULT;
       public          postgres    false    200    201    201            �          0    18554    posts 
   TABLE DATA           9   COPY public.posts (id, title, content, date) FROM stdin;
    public          postgres    false    201   9
       �           0    0    posts_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.posts_id_seq', 3, true);
          public          postgres    false    200            %           2606    18562    posts posts_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.posts
    ADD CONSTRAINT posts_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.posts DROP CONSTRAINT posts_pkey;
       public            postgres    false    201            �   �  x��K�A���)|���� ��
��H��b�T;�z�Tٽ�5w�#$+�B�F��t2g@#u�\ۿ?�j6~�?ￜ����c|�����0�����z��Z��-����ٛ�)�M_4�l�6�ɧ�0�,��X�	�f��{.�c�Y�S�1@H��0�@;v�$e��#lQo�4�Z�@�~������0�dl�C=ب7�N��������W'f��z��Ȃ���	�n�3ښ�^�;K|�TKi9P�zV�[r���-j>�a�3�����yo�&*5:��a�2�"�vˎS�6-�L��SZ )�g#�i���E�h���=�{4{�h�\Bja��rF���S%a�5��c�P���l[t��p9kD��VfO�ǡ�.���]U�9���X���=`g��a���OZ$5pc]��jtNC�ʬ���vj�i,b�gd�*���A�[e+X��u;��C��A���˜_ϯ���i���9_-W/�l���?�Z=�     