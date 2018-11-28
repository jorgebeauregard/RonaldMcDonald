import React from 'react';

import TitleCardSmall from './../General Purpose/TitleCardSmall'

const GeneralInformationCard = (props) => {
    return ( 
        <div className="card">
            <div className="card-content">
                <TitleCardSmall title="Información general" background="warning"></TitleCardSmall>
                <div className="columns is-multiline margin-top is-mobile">
                    <div className="column is-4-desktop is-6-mobile">
                        <p className="title is-5">Fecha de nacimiento:</p>
                        <p className="subtitle">{props.data.birthday}</p>
                    </div>
                    <div className="column is-4-desktop is-6-mobile">
                        <p className="title is-5">Sexo:</p>
                        <p className="subtitle">{props.data.sex}</p>
                    </div>
                    <div className="column is-4-desktop is-6-mobile">
                        <p className="title is-5">Escolaridad:</p>
                        <p className="subtitle">{props.data.scholarship}</p>
                    </div>
                    <div className="column is-4-desktop is-6-mobile">
                        <p className="title is-5">Dirección:</p>
                        <p className="subtitle">{props.data.address_street}</p>
                    </div>
                    <div className="column is-4-desktop is-6-mobile">
                        <p className="title is-5">Colonia:</p>
                        <p className="subtitle">{props.data.neighborhood}</p>
                    </div>
                    <div className="column is-4-desktop is-6-mobile">
                        <p className="title is-5">Municipio:</p>
                        <p className="subtitle">{props.data.municipality}</p>
                    </div>
                    <div className="column is-4-desktop is-6-mobile">
                        <p className="title is-5">Estado:</p>
                        <p className="subtitle">{props.data.state}</p>
                    </div>
                    <div className="column is-4-desktop is-6-mobile">
                        <p className="title is-5">Código postal:</p>
                        <p className="subtitle">{props.data.zip_code}</p>
                    </div>
                    <div className="column is-4-desktop is-6-mobile">
                        <p className="title is-5">Teléfono 1:</p>
                        <p className="subtitle">{props.data.phone_1}</p>
                    </div>
                    <div className="column is-4-desktop is-6-mobile">
                        <p className="title is-5">Teléfono 2:</p>
                        <p className="subtitle">{props.data.phone_2}</p>
                    </div>
                    <div className="column is-4-desktop is-6-mobile">
                        <p className="title is-5">Socioeconómico:</p>
                        <p className="subtitle">{props.data.social}</p>
                    </div>
                    <div className="column is-4-desktop is-6-mobile">
                        <p className="title is-5">Zona:</p>
                        <p className="subtitle">{props.data.zone_type}</p>
                    </div>
                    <div className="column is-4-desktop is-6-mobile">
                        <p className="title is-5">Salario Mínimo:</p>
                        <p className="subtitle">{props.data.min_wage}</p>
                    </div>
                </div>
            </div>
        </div>
    );
}
 
export default GeneralInformationCard;