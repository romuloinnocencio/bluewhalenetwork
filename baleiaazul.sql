--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.2
-- Dumped by pg_dump version 9.6.2

-- Started on 2017-06-01 20:53:53 BRT

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 1 (class 3079 OID 12393)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2142 (class 0 OID 0)
-- Dependencies: 1
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 186 (class 1259 OID 16424)
-- Name: agenda; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE agenda (
    id integer NOT NULL,
    name character varying(255),
    phone character varying(40),
    password character varying(100),
    email character varying(100),
    about character varying(400),
    photo character varying(255),
    birthdate character varying(10)
);


ALTER TABLE agenda OWNER TO postgres;

--
-- TOC entry 185 (class 1259 OID 16422)
-- Name: agenda_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE agenda_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE agenda_id_seq OWNER TO postgres;

--
-- TOC entry 2143 (class 0 OID 0)
-- Dependencies: 185
-- Name: agenda_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE agenda_id_seq OWNED BY agenda.id;


--
-- TOC entry 188 (class 1259 OID 16433)
-- Name: timeline; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE timeline (
    id integer NOT NULL,
    post character varying(255),
    img character varying(255)
);


ALTER TABLE timeline OWNER TO postgres;

--
-- TOC entry 187 (class 1259 OID 16431)
-- Name: timeline_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE timeline_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE timeline_id_seq OWNER TO postgres;

--
-- TOC entry 2144 (class 0 OID 0)
-- Dependencies: 187
-- Name: timeline_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE timeline_id_seq OWNED BY timeline.id;


--
-- TOC entry 2013 (class 2604 OID 16427)
-- Name: agenda id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY agenda ALTER COLUMN id SET DEFAULT nextval('agenda_id_seq'::regclass);


--
-- TOC entry 2014 (class 2604 OID 16436)
-- Name: timeline id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY timeline ALTER COLUMN id SET DEFAULT nextval('timeline_id_seq'::regclass);


--
-- TOC entry 2133 (class 0 OID 16424)
-- Dependencies: 186
-- Data for Name: agenda; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY agenda (id, name, phone, password, email, about, photo, birthdate) FROM stdin;
6	teste1	\N	saTBKtwSCLJ0A	test1@teste1.com	\N	images/no-picture.jpg	16/12/1985
\.


--
-- TOC entry 2145 (class 0 OID 0)
-- Dependencies: 185
-- Name: agenda_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('agenda_id_seq', 6, true);


--
-- TOC entry 2135 (class 0 OID 16433)
-- Dependencies: 188
-- Data for Name: timeline; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY timeline (id, post, img) FROM stdin;
\.


--
-- TOC entry 2146 (class 0 OID 0)
-- Dependencies: 187
-- Name: timeline_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('timeline_id_seq', 1, false);


-- Completed on 2017-06-01 20:53:53 BRT

--
-- PostgreSQL database dump complete
--

