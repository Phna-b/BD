PGDMP     *    0                z         	   dbproject    14.5    14.5     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                        0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    16394 	   dbproject    DATABASE     i   CREATE DATABASE dbproject WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'Portuguese_Brazil.1252';
    DROP DATABASE dbproject;
                postgres    false            �            1259    16477    ator    TABLE     Z   CREATE TABLE public.ator (
    nome character varying(100) NOT NULL,
    datanasc date
);
    DROP TABLE public.ator;
       public         heap    postgres    false            �            1259    16482    obra    TABLE       CREATE TABLE public.obra (
    titulo character varying(100) NOT NULL,
    idobra integer NOT NULL,
    ano date,
    resumo character varying(1000),
    genero character varying(100),
    duracao time without time zone,
    ntemporadas integer,
    estrela character varying(100)
);
    DROP TABLE public.obra;
       public         heap    postgres    false            �            1259    16502    status    TABLE     �  CREATE TABLE public.status (
    dataf date,
    datainic date,
    tempo time without time zone,
    nota integer,
    status character varying(15) NOT NULL,
    idobra integer,
    CONSTRAINT status_check CHECK ((datainic <= dataf)),
    CONSTRAINT status_nota_check CHECK (((nota >= 0) AND (nota <= 5))),
    CONSTRAINT status_status_check CHECK ((((status)::text = 'Completo'::text) OR ((status)::text = 'Em andamento'::text) OR ((status)::text = 'Na lista'::text)))
);
    DROP TABLE public.status;
       public         heap    postgres    false            �          0    16477    ator 
   TABLE DATA           .   COPY public.ator (nome, datanasc) FROM stdin;
    public          postgres    false    209          �          0    16482    obra 
   TABLE DATA           b   COPY public.obra (titulo, idobra, ano, resumo, genero, duracao, ntemporadas, estrela) FROM stdin;
    public          postgres    false    210   ;       �          0    16502    status 
   TABLE DATA           N   COPY public.status (dataf, datainic, tempo, nota, status, idobra) FROM stdin;
    public          postgres    false    211   J       g           2606    16481    ator ator_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.ator
    ADD CONSTRAINT ator_pkey PRIMARY KEY (nome);
 8   ALTER TABLE ONLY public.ator DROP CONSTRAINT ator_pkey;
       public            postgres    false    209            i           2606    16488    obra obra_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.obra
    ADD CONSTRAINT obra_pkey PRIMARY KEY (idobra);
 8   ALTER TABLE ONLY public.obra DROP CONSTRAINT obra_pkey;
       public            postgres    false    210            k           2606    16509    status status_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.status
    ADD CONSTRAINT status_pkey PRIMARY KEY (status);
 <   ALTER TABLE ONLY public.status DROP CONSTRAINT status_pkey;
       public            postgres    false    211            l           2606    16489    obra obra_estrela_fkey    FK CONSTRAINT     v   ALTER TABLE ONLY public.obra
    ADD CONSTRAINT obra_estrela_fkey FOREIGN KEY (estrela) REFERENCES public.ator(nome);
 @   ALTER TABLE ONLY public.obra DROP CONSTRAINT obra_estrela_fkey;
       public          postgres    false    209    210    3175            m           2606    16510    status status_idobra_fkey    FK CONSTRAINT     z   ALTER TABLE ONLY public.status
    ADD CONSTRAINT status_idobra_fkey FOREIGN KEY (idobra) REFERENCES public.obra(idobra);
 C   ALTER TABLE ONLY public.status DROP CONSTRAINT status_idobra_fkey;
       public          postgres    false    210    211    3177            �   (   x��I��K,J�Wp�tN,(���4�47�54"�=... �]	      �   �   x�-�=N�@���)��qHGIB�"QP�Ќ�Ci�cf��A��؋�H��b����
�x��9���鶻�n[��<����Q�{D�bP3�j��^C���LA��g�`B+r���YL!q*��n��I}x��5"�|N�i�I�,�D��}`0ϩ��&D���(���#�8%MDJH,KV_!	�g�\/�ib�'P�|�/]�Lz�����r^��`�u�ۮ�r�;��d5� {���m���lz�      �      x������ � �     