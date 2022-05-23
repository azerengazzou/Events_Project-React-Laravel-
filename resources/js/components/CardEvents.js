import { React, useState, useEffect } from 'react'
import axios from 'axios'
import { Container, Row, Col } from 'reactstrap'

const AllEvents = () => {
    useEffect(() => {
        getEvents();
    }, [])
    const [events, setEvents] = useState([]);
    const [loading, setLoading] = useState(true);
    const getEvents = async () => {
        try {
            const res = await axios.get('http://127.0.0.1:8000/api/events')
            setEvents(res.data.Events)
            console.log(res.data.Events)
        } catch (err) {
            alert(err.message);
        }
    };
    return (
        <section className="s1">
            <Container>
                <Row>
                    <Col md="12" className="text-center s1-intro" >
                        <h1>Évènements des clubs</h1>
                        <h3>Des activités, des projets, des évènements, tout pour réussir et apprécier la vie d’étudiant en dehors des cours .</h3>
                    </Col>
                    {loading && events.map((ev) => (
                        <Col md="6" lg="4" className="text-center s1-advice" key={ev.id}>
                            <img
                                className="s1-avatar"
                                src={ev.image}
                                alt=""
                            />
                            <h1 >
                                {ev.nom_event}
                            </h1>
                            <p>
                                {ev.description.substring(0, 100)}
                                <br></br>
                                Prix : 
                                {ev.price}
                            </p>
                            <a href="/event/details">read more</a>
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
export default AllEvents;