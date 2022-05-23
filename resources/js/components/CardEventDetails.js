import { React, useState, useEffect, Component } from 'react'
import axios from 'axios'
import { Container, Row, Col } from 'reactstrap'

const CardEventDetails =  () => {
    return(
  <section className="s2">
    <Container>
      <Row className="flex-align">
        <Col md="5" lg="3" className="s2__mob-pic">
          <img
            src=""
            alt=""
          />
        </Col>
        <Col md="7" lg="5" className="s2__des">
          <h1>
            <span className="bold">La nuit de l'info</span>2021-12-26
          </h1>
          <p>
          Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",
          </p>
          <ul className="s2__list">
          <li><i className="">&#707;</i>  Contact : nuit@email.com</li>
            <li><i className="">&#707;</i>  Prix : 20 DT</li>
            <li><i className="">&#707;</i>  Localisation : polytechnique sousse</li>
          </ul>
        </Col>
      </Row>
      
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
export default CardEventDetails;
