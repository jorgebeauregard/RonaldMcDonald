import React from 'react';
import TitleCardSmall from './../General Purpose/TitleCardSmall';

const VisitHistoryCard = (props) => {
    return ( 
        <div className="card">
            <div className="card-content">
                <TitleCardSmall title="Historial de visitas" background="link"></TitleCardSmall>
                <div className="hack1">
                    <div className="hack2">
                        <table className="table is-fullwidth">
                            <thead>
                                <tr>
                                    <th>Fecha de ingreso</th>
                                    <th>Fecha de salida</th>
                                    <th>Doctor</th>
                                    <th>Diagnóstico</th>
                                </tr>
                            </thead>
                            <tbody>
                                {props.data ? 
                                
                                props.data.map(checkIn =>
                                    <tr key={checkIn.id}>
                                        <td>{checkIn.check_in_date}</td>
                                        <td>{checkIn.check_out_date}</td>
                                        <td>{checkIn.doctor}</td>
                                        <td>{checkIn.diagnosis}</td>
                                    </tr>
                                )
                                :
                                <tr></tr>
                                }
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
    );
}
 
export default VisitHistoryCard;
