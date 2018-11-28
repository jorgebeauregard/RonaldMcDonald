import React from 'react';
import TitleCardSmall from './../General Purpose/TitleCardSmall';

const CurrentCheckInCard = (props) => {
    return (
        <div className="card">
            <div className="card-content">
                <TitleCardSmall title="Información de estadía actual" background="success"></TitleCardSmall>
                <div className="columns is-multiline margin-top">
                    <div className="column is-4">
                        <p className="title is-5">Ubicación:</p>
                        {props.data.data ? (<p className={props.data.data.child_status==("En hospital") ? "subtitle has-text-danger" : "subtitle has-text-success"}>{props.data.data.child_status}</p>) : (<p className="subtitle"></p>)}
                    </div>
                    <div className="column is-4">
                        <p className="title is-5">Fecha de ingreso:</p>
                        {props.data.data ? (<p className="subtitle">{props.data.data.check_in_date}</p>) : <p className="subtitle"></p>}
                    </div>
                    <div className="column is-4">
                        <p className="title is-5">Doctor:</p>
                        {props.data.data ? (<p className="subtitle">{props.data.data.doctor}</p>) : <p className="subtitle"></p>}
                    </div>
                    <div className="column is-4">
                        <p className="title is-5">Diagnóstico:</p>
                        {props.data.data ? (<p className="subtitle">{props.data.data.diagnosis}</p>) : <p className="subtitle"></p>}
                    </div>
                    <div className="column is-4">
                        <p className="title is-5">Tratamiento:</p>
                        {props.data.data ? (<p className="subtitle">{props.data.data.treatment}</p>) : <p className="subtitle"></p>}
                    </div>
                    <div className="column is-4">
                    </div>
                    <div className="column is-4">
                        <button className="button is-danger is-fullwidth"><span className="icon"><i className="fas fa-sign-out-alt padding-icon"></i></span>Check-out</button>
                    </div>
                    <div className="column is-4">
                    </div>
                </div>
            </div>
        </div>
    );
}
 
export default CurrentCheckInCard;