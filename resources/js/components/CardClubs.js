import { React, useState, useEffect, Component } from 'react'
import axios from 'axios'
import { Container, Row, Col } from 'reactstrap'

const AllClubs = () => {
    useEffect(() => {
        getClubs();
    }, [])
    const [clubs, setClub] = useState([]);
    const [loading, setLoading] = useState(true);
    const getClubs = async () => {
        try {

            const res = await axios.get('http://127.0.0.1:8000/api/clubs')
            setClub(res.data.Clubs)
            console.log(res.data.Clubs)
        } catch (err) {
            alert(err.message);
        }
    };
    return (
        <section className="s1">
            <Container>
                <Row>
                    <Col md="12" className="text-center s1-intro" >
                        <h1>Clubs Étudiants</h1>
                        <h3>Participer à la vie associative de l’Ecole est quasi-incontournable pour un parcours
                            réussi et une scolarité épanouie.</h3>
                    </Col>
                    {loading && clubs.map((cl) => (
                        <Col md="6" lg="4" className="text-center s1-advice" key={cl.id}>
                            <img
                                className="s1-avatar"
                                src={cl.image}
                                alt=""
                            />
                            <h1 >
                                {cl.nom_club}
                            </h1>
                            <p>
                                {cl.description.substring(0, 250)}
                            </p>
                            <a href={`/clubs/clubdetails/${cl.id}`}>read more</a>
                        </Col>
                    ))
                    }
                </Row>
            </Container>
            <style>
                {`
              .s1 {
                  font-size: 16px;
              }
              .s1-intro {
                  margin-bottom: 2em;
              }
              .s1-intro h1 {
                  font-size: 3em;
                  font-weight: 100;
              }
              .s1-intro h3 {
                  font-size: 1em;
                  font-weight: 200;
                  margin-top: 1em;
              }
              .s1-avatar {
                  width: 60px;
              }
              
              .s1-advice {
                  padding: 2em;
                  transition: all .5s;
              }
              .s1-advice:hover {
                  box-shadow: #f2f0f0 1px 1px 10px, #f2ecec9c 1px 1px 10px;
              }
              .s1-advice h3 {
                  font-size: 1.1em;
                  margin-top: 2em;
                  letter-spacing: 2px;
              }
              .s1-advice p {
                  margin-top: 2em;
                  font-size: .95em;
                  line-height: 2;
                  color: dimgray;
              }
              .s1-advice a {
                  font-size: .95em;
                  text-decoration: none;
                  color: hsl(120, 2%, 34%);
                  transition: all .5s;
              }
              .s1-advice a:hover {
                  color: var(--brand-color);
              }
              
              `}
            </style>
        </section>
    );
}
export default AllClubs;