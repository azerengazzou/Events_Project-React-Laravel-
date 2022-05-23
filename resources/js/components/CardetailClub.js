import { React, useState, useEffect, Component } from 'react'
import axios from 'axios'
import { Container, Row, Col } from 'reactstrap'

const CardetailClub =  e => {
    useEffect(() => {
        getClubs();
    }, [])
    const [Clubdetail, setClubdet] = useState([]);
    const [loading, setLoading] = useState(true);
    const getClubs = async (id) => {
        try {
            const res = await axios.get(`http://127.0.0.1:8000/api/clubs/clubdetails/${id}`)
            setClubdet(res.data.Clubsdet)
            console.log(res.data.Clubsdet)
        } catch (err) {
            alert(err.message);
        }
    };
    return(
  <section className="s2">
    <Container>
    {loading && Clubdetail.map((cl) => (
      <Row className="flex-align"  key={cl.id}>
        <Col md="5" lg="3" className="s2__mob-pic">
          <img
            src={cl.image}
            alt=""
          />
        </Col>
        <Col md="7" lg="5" className="s2__des">
          <h1>
            <span className="bold">{cl.nom_club}</span> Membres : {cl.membres}
          </h1>
          <p>
          {cl.description}
          </p>
          <ul className="s2__list">
            <li><i className="">&#707;</i>  creative design</li>
            <li><i className="">&#707;</i>  retina ready</li>
            <li><i className="">&#707;</i>  easy to use</li>
            <li><i className="">&#707;</i>  unlimited features</li>
            <li><i className="">&#707;</i>  unlimited features</li>
          </ul>
        </Col>
      </Row>
      ))
    }
    </Container>
    <style>{`
        .s2 {
            font-size: 16px;
            margin-top: 4em;
        }
        .s2__mob-pic {
            margin-bottom: 4em;
        }
        @media (min-width: 768px) {
            .s2__mob-pic {
            margin-bottom: 0;
            }
        }
        
        .s2__mob-pic img {
            max-width: 100%;
        }
        .s2__des h1 {
            font-size: 2.6em;
            font-weight: 100;
            letter-spacing: 2.5px;
        }
        .s2__des .bold{
            font-weight: 700;
        }
        .s2__des p {
            font-weight: 100;
            font-size: .95em;
            line-height: 1.8;
        }
        .s2__des ul {
            font-weight: 100;
            font-size: .9em;
            letter-spacing: 1.5px;
            list-style: none;
            padding: 0;
        }
         .s2__list > li {
            padding: .5em 0;
        }
        .s2__list i {
            margin-right: 1em;
        }
        @media (min-width: 768px) {
            .flex-align {
                justify-content: center;
                align-items: center;
            }
        }
    
    `}</style>
    
  </section>
   );
}
export default CardetailClub;
